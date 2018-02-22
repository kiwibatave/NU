<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/02/18
 * Time: 16:26
 */

namespace BC\PlatformBundle\Beta;

use Symfony\Component\HttpFoundation\Response;

class BetaHTMLAdder
{
    // Méthode pour add le "BETA" à une reponse
    public function addBeta(Response $response, $remainingDays)
    {
        $content = $response->getContent();
        // Ajout de css pour test
//        $html = '<div style="position: absolute; top: 0; background: red; width: 100%; text-align: center;
//            padding: 0.5em;">BETA J-'.(int) $remainingDays.' !</div>';
//
//        // Insertion du code dans la page, au début du <body>
//        $content = str_replace(
//            '<body>',
//            '<body> '.$html,
//            $content
//        );

        // Modification du contenu de la réponse
        $response->setContent($content);

        return $response;
    }
}