<?php


namespace App\Administration\Domain;


use App\Administration\Application\Command\CreateSchool;
use App\Shared\Domain\Uuid;
use App\Shared\Domain\IdentityFactory;

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