<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Category;

class LoadCategory extends AbstractFixture implements OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
      'Développement web',
      'Développement mobile',
      'Graphisme',
      'Intégration',
      'Réseau'
    );

    

    $category1 = new Category();
    $category1->setName($names[0]);
    $manager->persist($category1);

    $category2 = new Category();
    $category2->setName($names[1]);
    $manager->persist($category2);

    $category3 = new Category();
    $category3->setName($names[2]);
    $manager->persist($category3);

    $category4 = new Category();
    $category4->setName($names[3]);
    $manager->persist($category4);

    $category5 = new Category();
    $category5->setName($names[4]);
    $manager->persist($category5);
    

    $manager->flush();



    $this->addReference('category1', $category1);
    $this->addReference('category2', $category2);
    $this->addReference('category3', $category3);
    $this->addReference('category4', $category4);
    $this->addReference('category5', $category5);

  }

  public function getOrder() {
    return 1;
  }
}
