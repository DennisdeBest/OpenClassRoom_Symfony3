<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Image;

class LoadImage extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {



        $images = array('http://www.lafermeduweb.net/images/tutorial/47/bundles-symfony-2.jpg',
            'http://im.ziffdavisinternational.com/t/pcmag_uk/photo/default/tech-blog_g3b5.640.jpg',
            'http://konradpodgorski.com/wp-content/uploads/2012/01/Symfony_with_Ubuntu.png',
            'http://payload345.cargocollective.com/1/0/19261/9211166/random_ani_buns_600x600.gif');
        $alt='alt';

        
        $image1= new Image();
        $image1->setUrl($images[0]);
        $image1->setAlt($alt);
        $manager->persist($image1);

        $image2= new Image();
        $image2->setUrl($images[1]);
        $image2->setAlt($alt);
        $manager->persist($image2);

        $image3= new Image();
        $image3->setUrl($images[2]);
        $image3->setAlt($alt);
        $manager->persist($image3);

        $image4= new Image();
        $image4->setUrl($images[3]);
        $image4->setAlt($alt);
        $manager->persist($image4);

        $manager->flush();

        
        $this->addReference('image1', $image1);
        $this->addReference('image2', $image2);
        $this->addReference('image3', $image3);
        $this->addReference('image4', $image4);
        

    }

    public function getOrder() {
        return 2;
    }
    
}