<?php


namespace App\Administration\Domain;


use App\Shared\Domain\IdentityFactory;

class SchoolFactory
{

    /**
     * @var IdentityFactory
     */
    private IdentityFactory $uuidFactory;

    public function __construct(IdentityFactory $uuidFactory)
    {
        $this->uuidFactory = $uuidFactory;
    }

    public function createFromCommand(SchoolName $schoolName)
    {
        $id = $this->uuidFactory->generateNew();
        return new School($id, $schoolName);
    }
}