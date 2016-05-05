<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Application;

class LoadApplication extends AbstractFixture implements OrderedFixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $advertReferenceArray = array('advert0','advert1', 'advert2', 'advert3', 'advert4', 'advert5', 'advert6',
            'advert7', 'advert8', 'advert9', 'advert10', 'advert11', 'advert12', 'advert13');
        $content = 'Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla';

        $names = array('Pierre', 'Jean', 'Charles', 'Karen', 'Marie', 'Jean-eude', 'patrick', 'fred', 'Tony', 'Serpico');
        
        foreach ($names as $name){
            $application = new Application();
            $application->setAuthor($name);
            $randAdvert = rand(0, count($advertReferenceArray)-1);
            $application->setAdvert($this->getReference($advertReferenceArray[$randAdvert]));
            $application->setContent($content);

            $manager->persist($application);
        }
        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }
}
