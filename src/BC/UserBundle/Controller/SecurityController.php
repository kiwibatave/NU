<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 09/02/18
 * Time: 11:08
 */
namespace BC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        // Si visiteur déjà identifié -> acceuil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTIFICATED_REMEMBERED')) {
            return $this->redirectToRoute('bc_platform_acceuil');
        }

        // authentication_utils permet de récupérer le nom de l'utilisateur
        // et l'erreur si le form soumis est invalide
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('BCUserBundle:Security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
}
// Suppression du SecurityController pour permettre à FOSUser de prendre la main
// 11/02/18