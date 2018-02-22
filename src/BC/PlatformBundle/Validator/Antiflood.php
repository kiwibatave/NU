<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 07/02/18
 * Time: 11:36
 */
// Modif du 07/02/18
namespace BC\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Antiflood extends Constraint
{
    public $message = "Vous avez déjà posté une annonce il y a moins d'1 minute, merci de patienter.";

    // Modif du 07/02/18
    public function validatedBy()
    {
        return 'bc_platform_antiflood'; // appel de l'alias du service
    }
}