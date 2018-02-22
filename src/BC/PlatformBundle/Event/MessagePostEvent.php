<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 14/02/18
 * Time: 11:08
 */

namespace BC\PlatformBundle\Event;

use Symfony\Component\EventDispatcher\Event;
// modif du 14/02/18
use Symfony\Component\Security\Core\User\UserInterface;

class MessagePostEvent extends Event
{
    // modif du 14/02/18
    protected $message;
    protected $user;

    public function __construct($message, UserInterface $user)
    {
        $this->message = $message;
        $this->user = $user;
    }

    // Le listener accède au message
    public function getMessage()
    {
        return $this->message;
    }

    // Le listener doit pouvoir modifier le message
    public function setMessage($message)
    {
        return $this->message = $message;
    }

    // Le listener doit avoir accès au user
    public function getUser()
    {
        return $this->user;
    }
}