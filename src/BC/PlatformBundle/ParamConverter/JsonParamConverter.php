<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 16/02/18
 * Time: 15:37
 */

namespace BC\PlatformBundle\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;

class JsonParamConverter implements ParamConverterInterface
{
    function supports(ParamConverter $configuration)
    {
        // Si le nom de l'argu du controleur n'est pas 'json', on ne retourne rien
        if ('json' !== $configuration->getName()) {
            return false;
        }
    }

    function apply(Request $request, ParamConverter $configuration)
    {
        // On récupère la valeur actuelle de l'attribut
        $json = $request->attributes->get('json');

        // On effectue notre action
        $json = json_decode($json, true);

        // On m.a.j la nouvelle valeur
        $request->attributes->set('json', $json);
    }
}