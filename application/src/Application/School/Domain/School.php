<?php


namespace App\Application\School\Domain;


use App\Application\School\Command\CreateSchool;

final class School
{
    private int $id;
    private SchoolName $name;

    private function __construct(string $name)
    {
        $this->name = new SchoolName($name);
    }
    public static function fromCommand(CreateSchool $command)
    {
        return new School($command->getName());
    }
}