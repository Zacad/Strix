<?php


namespace App\Learning\Domain;


use App\Shared\Domain\Uuid;

interface Repository
{
    public function save(School $school);

    public function findById(Uuid $id): iterable;
}