<?php


namespace App\Application\School\Domain;


use App\Application\School\Command\CreateSchool;
use App\Application\Shared\Domain\Uuid;
use App\Application\Shared\Domain\UuidFactory;

final class School
{
    private Uuid $id;
    private SchoolName $name;

    public function __construct(Uuid $uuid, SchoolName $name)
    {
        $this->id = $uuid;
        $this->name = $name;
    }

    public function getUuid(): string
    {
        return $this->id->uuid();
    }

    public function getName(): string
    {
        return $this->name->name();
    }
}