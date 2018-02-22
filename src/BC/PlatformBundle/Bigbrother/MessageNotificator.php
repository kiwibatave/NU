<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 14/02/18
 * Time: 11:51
 */

namespace BC\PlatformBundle\Bigbrother;

use Symfony\Component\Security\Core\User\UserInterface;

class MessageNotificator
{
    /**
     * @var \Swift_Mailer
     */
    protected $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    // Méthode de notification par mail pour admin
    // 14/02/18
    public function notifyByEmail($message, UserInterface $user)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject("Nouveau message d'un utilisateur surveillé")
            ->setFrom('admin@naitup.com')
            ->setTo('admin@naitup.com')
            ->setBody("L'utilisateur surveillé '".$user->getUsername()."' a posté le message suivant :
            '".$message."'");

        $this->mailer->send($message);
    }
}