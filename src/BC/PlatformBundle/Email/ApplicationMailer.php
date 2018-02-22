<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 30/01/18
 * Time: 15:48
 */
namespace BC\PlatformBundle\Email;

use BC\PlatformBundle\Entity\Application;

class ApplicationMailer
{
    /** \Swift_Mailer
     *
     */
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendNewNotification(Application $application)
    {
        $message = new \Swift_Message(
            'Nouvelle réponse',
            'Vous avez reçu une nouvelle proposition.');

        $message
            ->addTo($application->getAdvert()->getAuthor()) // Test 30/01/18
            ->addFrom('admin@lesite.com');

        $this->mailer->send($message);
    }
}