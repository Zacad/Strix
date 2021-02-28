<?php


namespace App\Administration\Infrastructure\Repository;


use App\Administration\Domain\School;
use App\Shared\Domain\Uuid;
use App\Administration\Domain\SchoolRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class SchoolDoctrineRepository extends ServiceEntityRepository implements SchoolRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function save(School $school)
    {
        $this->_em->persist($school);
        $this->_em->flush();
    }

    public function findById(Uuid $id): iterable
    {
        return $this->find($id);
    }
}