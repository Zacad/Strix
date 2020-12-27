<?php


namespace App\Learning\Domain;


use App\Learning\Command\CreateSchool;
use App\Shared\Domain\Uuid;
use App\Shared\Domain\UuidFactory;

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