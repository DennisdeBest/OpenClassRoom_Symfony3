<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use OC\PlatformBundle\Entity\Advert;

class LoadAdvert extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $titles = array('développeur', 'admin sys', 'tech cisco', 'artiste', 'jongleur', 'pecheur', 'prof',
            'Architect', 'Quelquechose', 'Koala', 'Analyst', 'Auditeur', 'Inspecteur de travaux fini', 'Plus d\'inspi');
        $content = 'Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla';

        $imageReferenceArray = array('image1', 'image2', 'image3', 'image4');

        $categoryReferenceArray = array('category1', 'category2', 'category3', 'category4', 'category5');

        $counter=0;
        foreach ($titles as $title){
            $adId = 'advert'.$counter;
            $advert = new Advert();
            $randImage = rand(0, count($imageReferenceArray)-1);
            $randDays = rand(1,30);
            $interval = 'P'.$randDays.'D';

            $advert->setImage($this->getReference($imageReferenceArray[$randImage]));
            $advert->setTitle($title);
            $randCategory = rand(1, count($categoryReferenceArray)-1);
            $advert->addCategory($this->getReference($categoryReferenceArray[$randCategory]));
            $date = new \DateTime();
            $date->sub(new \DateInterval($interval));
            $advert->setDate($date);
            $advert->setAuthor('Test');
            $advert->setContent($content);

            $manager->persist($advert);

            $this->addReference($adId, $advert);
            $counter++;

        }
        $manager->flush();

;
        
    }

    public function getOrder() {
        return 3;
    }
}