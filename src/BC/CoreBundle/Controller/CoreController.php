<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 10/01/18
 * Time: 10:19
 */
namespace BC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
    // Nouvelle page accueil 10/01/18
    public function indexAction()
    {
    // Return de la page d'accueil
        return $this->render('BCCoreBundle:Core:index.html.twig');
    }
    // Page de contact 10/01/18
    public function contactAction(Request $request)
    {
        // Récupération session
        $session = $request->getSession();
        // Message
        $session->getFlashBag()->add('info', 'La page non disponible actuellement');
        // Redirection page accueil
        return $this->redirectToRoute('bc_core_home');
    }
}