<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 25/01/18
 * Time: 10:00
 */
namespace BC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BC\PlatformBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Ajout des catégories 25/01/18
        $names = array(
            'Simple',
            'Rapide',
            'Couple',
            'Famille');

        // On boucle sur les $names 25/01/18
        foreach ($names as $name) {
        // On crée la catégorie 25/01/18
            $category = new Category();
            $category->setName($name);
        // On persiste 25/01/18
            $manager->persist($category);
        }
        // On flush pour enregistrer 25/01/18
        $manager->flush();
    }
}