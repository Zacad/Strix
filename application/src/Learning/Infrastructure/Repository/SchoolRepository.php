<?php


namespace App\Learning\Infrastructure\Repository;


use App\Learning\Domain\Repository;
use App\Learning\Domain\School;
use App\Shared\Domain\Uuid;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class SchoolRepository extends ServiceEntityRepository implements Repository
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