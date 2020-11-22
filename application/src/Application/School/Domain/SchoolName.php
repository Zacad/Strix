<?php


namespace App\Application\School\Domain;


use App\Application\Shared\Domain\ValueObject;

/**
 * Class SchoolName
 * @package App\Application\School\Domain
 */
final class SchoolName
{
    private string $name;

    public static function fromString(string $name)
    {
        return new SchoolName($name);
    }

    /**
     * SchoolName constructor.
     * @param string $name
     */
    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    public function isEqual(SchoolName $secondSchoolName): bool
    {
        return $this->name === $secondSchoolName->getName();
    }

}