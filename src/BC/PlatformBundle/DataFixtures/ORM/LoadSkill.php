<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 25/01/18
 * Time: 12:13
 */
namespace BC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BC\PlatformBundle\Entity\Skill;

class LoadSkill implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Liste des skills 25/01/18
        $names = array('Un', 'Deux', 'Trois', 'Quatre');

        // On boucle sur les skill 25/01/18
        foreach ($names as $name) {
        // On crée le skill 25/01/2018
            $skill = new Skill();
            $skill->setName($name);
        // On persist 25/01/18
            $manager->persist($skill);
        }
        // On flush pour enregistrer 25/01/18
        $manager->flush();
    }
}