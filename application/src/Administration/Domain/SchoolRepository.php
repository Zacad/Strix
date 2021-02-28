<?php


namespace App\Administration\Domain;


use App\Shared\Domain\Uuid;

interface SchoolRepository
{
    public function save(School $school);

    public function findById(Uuid $id): iterable;
}