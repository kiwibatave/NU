<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 07/02/18
 * Time: 11:41
 */

// Modif du 07/02/18
namespace BC\PlatformBundle\Validator;

// Modif du 07/02/18
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntifloodValidator extends ConstraintValidator
{
    // modif du 07/02/18
    /**
     * @var RequestStack
     */
    private $requestStack;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    // Les argus déclarés dans le service arrivent au constructeur
    // On doit les enregistrer dans l'objet pour s'en servir
    public function __construct(RequestStack $resquestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $resquestStack;
        $this->em = $em;
    }

    public function validate($value, Constraint $constraint)
    {
//        // Test flood pour toutes annonces de moins de 3 caractères 07/02/18
//        if(strlen($value) < 3) {
//            // Déclenchement de l'erreur dans le form via cette ligne IMPORTANT
//            // Avec en argu le message de la contrainte (Antiflood)
//            $this->context->addViolation($constraint->message);
//          }
        // Modif du 07/02/18
        // Pour récupérer l'obj Request, il faut utiliser getCurrentRequest du service request_stack
        $request = $this->requestStack->getCurrentRequest();

        // On récupère l'IP de celui qui poste
        $ip = $request->getClientIp();

        // On vérifie si l'IP a déja posté une réponse il y a moins de ...
//        $isFlood = $this->em
//            ->getRepository('BCPlatformBundle:Application')
//            ->isFlood($ip, 15);
//
//        if ($isFlood) {
//            // La prochaine ligne déclenche l'erreur dans le form
//            // avec en argu le message
//            $this->context->addViolation($constraint->message);
//        }
    }
}

