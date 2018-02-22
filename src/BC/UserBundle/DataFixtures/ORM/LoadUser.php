<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 09/02/18
 * Time: 15:59
 */
namespace BC\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BC\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // liste d'utilisateurs à créer en dur 09/02/18
        $listNames = array('Kelly', 'Christina', 'Lisa');

        foreach ($listNames as $name) {
            // création du user
            $user = new User;

            // test donc user = password
            $user->setUsername($name);
            $user->setPassword($name);

            // salt non utilisé pour le moment
            $user->setSalt('');
            // définition uniquement pour le role ROLE_USER celui de base
            $user->setRoles(array('ROLE_USER'));

            //On persiste
            $manager->persist($user);
        }

        // Et on enregistre
        $manager->flush();
    }
}