<?php

namespace OC\PlatformBundle\Purger;
use Doctrine\ORM\EntityManager;

class OCPurger {

    private $days;
    private $em;

    /**
     * OCPurger constructor.
     * @param $days
     * @param $em
     */
    public function __construct($days,EntityManager $em)
    {
        $this->days = $days;
        $this->em = $em;
    }


    /**
     * néttoie la base de données
     * @param integer $days
     * @param $em
     */
    public function purge($days){
        $repo = $this->em->getRepository('OCPlatformBundle:Advert');
        $advertsToDelete = $repo->purge($days);

        foreach($advertsToDelete as $advert){
            $this->em->remove($advert);
        }

        $this->em->flush();
    }
}