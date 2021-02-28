<?php

declare(strict_types=1);

namespace App\Administration\Domain;


/**
 * Class SchoolName
 * @package App\Learning\Domain
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
        return $this->name === $secondSchoolName->name();
    }

}