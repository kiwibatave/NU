<?php

namespace BC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
// Modif du 11/02/18
//use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="bc_user")
 * @ORM\Entity(repositoryClass="BC\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser// Modif du 11/02/18 pour le fosuser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

// Modif du 11/02/18 pour l'utilisation du fosuser
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="username", type="string", length=255, unique=true)
//     */
//    private $username;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="password", type="string", length=255)
//     */
//    private $password;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="salt", type="string", length=255)
//     */
//    private $salt;
//
//    /**
//     * @var array
//     *
//     * @ORM\Column(name="roles", type="array")
//     */
//    private $roles;
//
//
//    /**
//     * Get id
//     *
//     * @return int
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * Set username
//     *
//     * @param string $username
//     *
//     * @return User
//     */
//    public function setUsername($username)
//    {
//        $this->username = $username;
//
//        return $this;
//    }
//
//    /**
//     * Get username
//     *
//     * @return string
//     */
//    public function getUsername()
//    {
//        return $this->username;
//    }
//
//    /**
//     * Set password
//     *
//     * @param string $password
//     *
//     * @return User
//     */
//    public function setPassword($password)
//    {
//        $this->password = $password;
//
//        return $this;
//    }
//
//    /**
//     * Get password
//     *
//     * @return string
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//
//    /**
//     * Set salt
//     *
//     * @param string $salt
//     *
//     * @return User
//     */
//    public function setSalt($salt)
//    {
//        $this->salt = $salt;
//
//        return $this;
//    }
//
//    /**
//     * Get salt
//     *
//     * @return string
//     */
//    public function getSalt()
//    {
//        return $this->salt;
//    }
//
//    /**
//     * Set roles
//     *
//     * @param array $roles
//     *
//     * @return User
//     */
//    public function setRoles($roles)
//    {
//        $this->roles = $roles;
//
//        return $this;
//    }
//
//    /**
//     * Get roles
//     *
//     * @return array
//     */
//    public function getRoles()
//    {
//        return $this->roles;
//    }
//    // modif du 09/02/18
//    public function eraseCredentials()
//    {
//
//    }
}

