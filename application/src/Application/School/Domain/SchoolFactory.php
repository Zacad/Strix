<?php


namespace App\Application\School\Domain;


use App\Application\Shared\Domain\UuidFactory;

class SchoolFactory
{

    /**
     * @var UuidFactory
     */
    private UuidFactory $uuidFactory;

    public function __construct(UuidFactory $uuidFactory)
    {
        $this->uuidFactory = $uuidFactory;
    }

    public function createFromCommand(CreateSchool $command)
    {
        $id = $this->uuidFactory->generateNew();
        $name = SchoolName::fromString($command->getName());
        return new School($id, $name);
    }
}