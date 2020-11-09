<?php


namespace App\Application\School\Domain;


use App\Application\Shared\domain\ValueObject;

/**
 * Class SchoolName
 * @package App\Application\School\Domain
 */
final class SchoolName
{
    private string $name;

    /**
     * SchoolName constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function isEqual(SchoolName $secondSchoolName): bool
    {
        return $this->name === $secondSchoolName->getName();
    }
}