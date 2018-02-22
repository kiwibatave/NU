<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 14/02/18
 * Time: 12:04
 */

namespace BC\PlatformBundle\Bigbrother;

use BC\PlatformBundle\Event\MessagePostEvent;

class MessageListener
{
    /**
     * @var MessageNotificator
     */
    protected  $notificator;

    /**
     * @var array
     */
    protected $listUsers = array();

    public function __construct(MessageNotificator $notificator, $listUsers)
    {
        $this->notificator = $notificator;
        $this->listUsers = $listUsers;
    }

    public function processMessage(MessagePostEvent $event)
    {
        // Activation de la survey si user est dans la liste
        if (in_array($event->getUser()->getUsername(), $this->listUsers)) {
            // Envoi du mail à l'admin
            $this->notificator->notifyByEmail($event->getMessage(), $event->getUser());
        }
    }
}