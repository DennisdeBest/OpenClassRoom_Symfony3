<?php

namespace OC\PlatformBundle\Repository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends \Doctrine\ORM\EntityRepository
{
    public function whereCurrentYear(QueryBuilder $qb){
        $qb->andWhere('a.date BETWEEN :start AND :end')
            ->setParameter('start', new \DateTime(date('Y').'01-01'))
            ->setParameter('start', new \DateTime(date('Y').'12-31'));
    }

    public function getAdvertWithApplications() {
        $qb = $this
            ->createQueryBuilder('a')
            ->leftJoin('a.applications', 'app')
            ->addSelect('app');

        return $qb
            ->getQuery()
            ->getResult();
    }

    public function getAdvertWithCategories(array $categoryNames){
        $qb = $this
            ->createQueryBuilder('a')
            ->leftJoin('a.categories', 'cat')
            ->addSelect('cat');
        
        $qb->where($qb->expr()->in('cat.name', $categoryNames));

        return $qb
            ->getQuery()
            ->getResult();

    }

    public function findLatest($limit){
        $qb = $this
            ->createQueryBuilder('a')
            ->setMaxResults($limit);

        return $qb
            ->getQuery()
            ->getResult();
    }

    public function getAdverts($page, $nbPerPage){
        $query = $this->createQueryBuilder('a')
            ->orderBy('a.date', 'DESC')
            ->leftJoin('a.categories', 'cat')
            ->addSelect('cat')
            ->leftJoin('a.image', 'img')
            ->addSelect('img')
            ->getQuery();

        $query->setFirstResult(($page-1)*$nbPerPage)
            ->setMaxResults($nbPerPage);

        return new Paginator($query, true);
    }

}
