<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 03/01/18
 * Time: 12:08
 */

namespace BC\PlatformBundle\Controller;

use BC\PlatformBundle\Entity\Advert;
use BC\PlatformBundle\Entity\AdvertSkill;
use BC\PlatformBundle\Entity\Application;
use BC\PlatformBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    public function indexAction($page)
    {
    // On ne connait pas le nombre total de pages, mais ce total doit être = ou > à 1
        if ($page < 1) {
    // On déclenche une execption pour afficher une page d'erreur 404
            throw new NotFoundHttpException('Page"'.$page.'"inexistante.');
        }
    // Création de la liste d'annonces en dur pour tester 08/01/18

        $listAdverts = array(
            array(
                'title'    => 'Tente DUÖ sur Rennes',
                'id'       => 1,
                'author'   => 'Denise',
                'content'  => 'Mon mari et moi même mettons en location...blablabla',
                'date'     => new \DateTime()),

            array(
                'title'    => 'Tente QUATRÖ sur Nice',
                'id'       => 2,
                'author'   => 'Jean Dennis',
                'content'  => 'Je loue ma tente de toit...blablabla',
                'date'     => new \DateTime()),

            array(
                'title'    => 'Tente TRIÖ sur Bordeaux',
                'id'       => 3,
                'author'   => 'Robert',
                'content'  => 'Nous souhaitons mettre à disposition notre...blablabla',
                'date'     => new \DateTime()),
        );

    // On récupéra les annonces ici, mais pour le moment on appele uniquement le template
        return $this->render('BCPlatformBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
//        // TEST ENTITY 2 11/01/18
//        // Récupération entité
//        $repository = $this->getDoctrine()->getManager()->getRepository('BCPlatformBundle:Advert');
//        // Récupération entité = id
//        $advert= $repository->find($id);
//        // $advert instance de BCPlatformBundle:Advert
//        // ou null si $id n'existe pas
        $advert = $em->getRepository('BCPlatformBundle:Advert')->find($id);

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


        // Fin Test ENTITY 2
        // TEST OK
        // Annonce en dur
//        $advert = array(
//            'title'    => 'Tente DUÖ sur Rennes',
//            'id'       => $id,
//            'author'   => 'Denise',
//            'content'  => 'Mon mari et moi même mettons en location...blablabla',
//            'date'     => new \DateTime()
//        );
    // On récupéra l'annonce via l'id $id
        return $this->render('BCPlatformBundle:Advert:view.html.twig', array(
            'advert' => $advert,
            'listApplications' => $listApplications, // 17/01/18
            'listAdvertSkills' => $listAdvertSkills, // 17/01/18
        ));
    }

    public function addAction(Request $request)
    {
    // Récupération de l'Entity Manager 17/01/18
        $em = $this->getDoctrine()->getManager();

        // Test ENTITY MANAGER 11/01/18
        // Création entité Advert
        $advert = new Advert();
        $advert->setTitle('Tente DUÖ en location à Paris.');
        $advert->setAuthor('Pierre');
        $advert->setContent("Je loue ma tente blablablabla...");

    // Test Relation OneToOne 12/01/18
    // Création entité Image
        $image = new Image();
        $image->setUrl('https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Tatev_Monastery_from_a_distance.jpg/400px-Tatev_Monastery_from_a_distance.jpg');
        $image->setAlt('Monastère');
    // Liaison image -> advert
        $advert->setImage($image);
    // Fin Test Relation OneToOne 12/01/18

    // Création première candidature 17/01/17
        $application1 = new Application();
        $application1->setAuthor('José');
        $application1->setContent("Je suis très intéressé....bla bla bla");

    // Création seconde candidature 17/01/17
        $application2 = new Application();
        $application2->setAuthor('Monique');
        $application2->setContent("Je voudrais louer....bla bla bla");

    // On lie les candidatures à l'annonce 17/01/18
        $application1->setAdvert($advert);
        $application2->setAdvert($advert);

    // On récupère les compétences possibles 17/01/18
        $listSkills = $em->getRepository('BCPlatformBundle:Skill')->findAll();

    // Pour chaque compétence 17/01/18
        foreach ($listSkills as $skill) {
            // On crée une nouvelle relation entre 1 annonce et 1 compétence 17/01/18
            $advertSkill = new AdvertSkill();
            // On lie à l'annonce (qui est toujours la même) 17/01/18
            $advertSkill->setAdvert($advert);
            // On lie la compétence (qui change dans la boucle foreach) 17/01/18
            $advertSkill->setSkill($skill);
            // On fixe le niveau au arbitrairement
            // $advertSkill->setLevel('Expert"); 17/01/18

            // Puis on persiste cette relation propriètaire des deux autres relations 17/01/18
            $em->persist($advertSkill);
        }
    // Step 1 : persist entity
        $em->persist($advert);

    // Step 1 bis : persist à la main si cascade={"persit"} absent
        // $em->persist($image); 17/01/18

    // Step 1 ter : pour la relation application-advert pas de cascade donc on doit persister à la main 17/01/18
        $em->persist($application1);
        $em->persist($application2);

    // Step 2 : flush du "persist"
        $em->flush();
    // Fin Test ENTITY MANAGER //
    // TEST OK //


    // Si requête POST, formulaire soumis
        if ($request->isMethod('POST')) {
    // Création et gestion du formulaire
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
    // Redirigé vers la page de visualisation de l'annonce
            return $this->redirectToRoute('bc_platform_view', array
    //            ('id' => 5)); test entity
            ('id' => $advert->getId()));
        }
    // Si non requête POST, affichage formulaire
        return $this->render('BCPlatformBundle:Advert:add.html.twig'); // modif 17/01/18
    }

    public function editAction($id, Request $request)
    {
    // On récupére l'Entity Manager 17/01/18
        $em = $this->getDoctrine()->getManager();
    // On récupére l'annonce $id 17/01/18
        $advert = $em->getRepository('BCPlatformBundle:Advert')->findBy($id);
    // Message en cas d'abs d'annonce 17/01/18
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        // Méthode find all pour retourner toutes les catégories de la bdd 17/01/18
            $listCategories = $em->getRepository('BCPlatformBundle:Category')->findAll();

        // On boucle les catégories pour les lier à l'annonce 17/01/18
            foreach ($listCategories as $category) {
                $advert->addCategory($category);
            }

        // Persist du changement de relation
        // Mais inutile car Advert est le propriétaire
        // On flush donc. 17/01/18
            $em->flush();

        // Même méthode que pour AddAction
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('bc_platform_view', array('id' => 5));
        }
//        $advert = array(
//            'title'    => 'Tente DUÖ sur Rennes',
//            'id'       => $id,
//            'author'   => 'Denise',
//            'content'  => 'Mon mari et moi même mettons en location...blablabla',
//            'date'     => new \DateTime());
        return $this->render('BCPlatformBundle:Advert:edit.html.twig', array(
            'advert' => $advert
        ));
    }

    public function deleteAction($id)
    {
    // On récupère l'Entity Manager
        $em = $this->getDoctrine()->getManager();

    // Récupération de l'annonce correspondante à $id avec l'Entity Manager 17/01/18
        $advert = $em->getRepository('BCPlatformBundle:Advert')->find($id);

    // On affiche un message en cas de non annonce 17/01/18
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

    // On boucle sur les catégories de l'annonce pour pouvoir les supprimer 17/01/08
        foreach ($advert->getCategories() as $category) {
            $advert->removeCategory($category);
        }

    // On doit persist le changement de relation
    // Mais encore advert est propiétaire donc pas besoin Doctrine s'en charge
    // Donc on flush uniquement 17/01/18
        $em->flush();

    // Gestion de la suppression à venir
        return $this->render('BCPlatformBundle:Advert:delete.html.twig');
    }

    public function menuAction($limit)
    {
    // Liste en dur pour test 04/01/18
    $listAdverts = array(
        array('id' => 2, 'title' => 'Tente Duo à Limoges'),
        array('id' => 5, 'title' => 'Tente Trio à Toulouse'),
        array('id' => 9, 'title' => 'Tente Quatro à Dunkerque')
    );

    return $this->render('BCPlatformBundle:Advert:menu.html.twig', array(
    // Passage des variables ici nécessaires pour au template (via le controller)
     'listAdverts' => $listAdverts
    ));
    }
}
