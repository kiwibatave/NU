<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 03/01/18
 * Time: 12:08
 */

namespace BC\PlatformBundle\Controller;

use BC\PlatformBundle\Entity\Advert;
// ajout de l'objet AdvertType
use BC\PlatformBundle\Event\MessagePostEvent;
use BC\PlatformBundle\Event\PlatformEvents;
use BC\PlatformBundle\Form\AdvertEditType;
use BC\PlatformBundle\Form\AdvertType;
//use BC\PlatformBundle\Entity\AdvertSkill; 31/01/18
//use BC\PlatformBundle\Entity\Application; 31/01/18
//use BC\PlatformBundle\Entity\Image; 31/01/18
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// ajout des use suivant pour tester form 31/01/18
//use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\FormType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\Extension\Core\Type\TextType;
// fin des use form
use Symfony\Component\HttpFoundation\Request;
//ajout du use suivant pour la getion utilisateur
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
// rajout du use pour la gestion utilisateur
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
// test paramconverter
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class AdvertController extends Controller
{
    public function indexAction($page) // modif 31/01/18
    {
    // On ne connait pas le nombre total de pages, mais ce total doit être = ou > à 1
        if ($page < 1) {
    // On déclenche une execption pour afficher une page d'erreur 404
            throw new NotFoundHttpException('Page"'.$page.'"inexistante.');
        }
    // On fixe le nombre d'annonces par page à 3 31/01/18
        $nbPerPage = 3;
    // On récupère l'objet Paginator
        $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('BCPlatformBundle:Advert')
            ->getAdverts($page, $nbPerPage);
    // On calcule le nbre total de pages via un "count"
        $nbPages = ceil(count($listAdverts) / $nbPerPage);
    // Création d'une erreur si page n'existe pas
        if ($page > $nbPages) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }
    // On récupéra les annonces ici, mais pour le moment on appele uniquement le template
        return $this->render('BCPlatformBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts,
            'nbPages' => $nbPages,
            'page' => $page,
        ));
    }
    // test params 16/02/18
    public function viewAction(Advert $advert, $id)
    {
        $em = $this->getDoctrine()->getManager();
        // Récupération entité = $id
        $advert = $em->getRepository('BCPlatformBundle:Advert')->find($id);
        // $advert instance de BC\PlatformBundle\Entity\Advert
        // ou null si $id n'existe pas.
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'exsiste pas.");
        }
        // Liste des candidatures 17/01/18
        $listApplications = $em
            ->getRepository('BCPlatformBundle:Application')
            ->findBy(array('advert' => $advert));
        //Récupération des skills 17/01/18
        $listAdvertSkills = $em
            ->getRepository('BCPlatformBundle:AdvertSkill')
            ->findBy(array('advert' => $advert));

        // On récupère l'annonce via l'id $id
        return $this->render('BCPlatformBundle:Advert:view.html.twig', array(
            'advert' => $advert,
            'listApplications' => $listApplications, // 17/01/18
            'listAdvertSkills' => $listAdvertSkills, // 17/01/18
        ));
    }
    // modif secu du 09/02/18

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function addAction(Request $request)
    {
      // Création du form 31/01/18
        // On crée un objet Advert
        $advert = new Advert();
        // On crée un formbuilder modif 02/02/18
        $form = $this->get('form.factory')->create(AdvertType::class, $advert);

        // Modif 02/02/18
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
                // On enregistre dans la bdd 02/02/18
                $em = $this->getDoctrine()->getManager();
                $em->persist($advert);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
                // On redirige directement vers la page de l'annonce que l'on vient de créée
                return $this->redirectToRoute('bc_platform_view', array('id' => $advert->getId()));
            }

        // On passe la méthode createView() du form dans la vue
        // afin qu'elle puisse afficher le form toute seule 31/01/18
        return $this->render('BCPlatformBundle:Advert:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction(Advert $advert, Request $request)
    {
        $form = $this->get('form.factory')->create(AdvertEditType::class, $advert);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            // On récupére l'Entity Manager 25/01/18
            $em = $this->getDoctrine()->getManager();
            // Pas besoin de persist, Doctrine connait déjà l'annonce
            $em->flush();
    // On récupére l'annonce $id 25/01/18
//        $advert = $em->getRepository('BCPlatformBundle:Advert')->findBy($id);
    // Message en cas d'abs d'annonce 25/01/18
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('bc_platform_view', array('id' => $advert->getId())); //modif 31/01/18
        }

        return $this->render('BCPlatformBundle:Advert:edit.html.twig', array(
            'advert' => $advert,
            // Modif du 06/02/18
            'form' => $form->createView(),
        ));
    }

    public function deleteAction(Request $request, $id)
    {
    // On récupère l'Entity Manager
        $em = $this->getDoctrine()->getManager();

    // Récupération de l'annonce correspondante à $id avec l'Entity Manager 25/01/18
        $advert = $em->getRepository('BCPlatformBundle:Advert')->find($id);

    // On affiche un message en cas de non annonce 25/01/18
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        // Modif du 06/02/18
        // Protection de la suppr d'une annonce via un form
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($advert);
            $em->flush();


        $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

        return $this->redirectToRoute('bc_platform_home');
        }
//    // On boucle sur les catégories de l'annonce pour pouvoir les supprimer 25/01/08
//        foreach ($advert->getCategories() as $category) {
//            $advert->removeCategory($category);
//        }

    // On doit persist le changement de relation
    // Mais encore advert est propiétaire donc pas besoin Doctrine s'en charge
    // Donc on flush uniquement 25/01/18
//        $em->flush();

    // Modif 06/02/18
        return $this->render('BCPlatformBundle:Advert:delete.html.twig', array(
            'advert' => $advert,
            'form' => $form->createView(),
        ));
    }

    public function menuAction($limit)
    {
    // Creation du menu 31/01/18
    // On récupère l'entity manager
        $em = $this->getDoctrine()->getManager();

        $listAdverts = $em->getRepository('BCPlatformBundle:Advert')->findBy(
            array(), // Pas de critères
            array('date' => 'desc'), // On trie par date décroissante
            $limit, // On sélectionne $limit annonces
            0 // En partant du premier
        );

    return $this->render('BCPlatformBundle:Advert:menu.html.twig', array(
    // Passage des variables ici nécessaires pour au template (via le controller)
     'listAdverts' => $listAdverts
    ));
    }
    // Modif du 14/02/18
    // Test traduction
    public function translationAction($name)
    {
        return $this->render('BCPlatformBundle:Advert:translation.html.twig', array(
            'name' => $name
        ));
    }
    // Modif du 16/02/18 paramconverter

    /**
     * @ParamConverter("json")
     */
    public function ParamConverterAction($json)
    {
        return new Response(print_r($json, true));
    }
}
