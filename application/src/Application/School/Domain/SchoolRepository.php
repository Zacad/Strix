<?php


namespace App\Application\School\Domain;


interface SchoolRepository
{
    public function add(School $school);
}