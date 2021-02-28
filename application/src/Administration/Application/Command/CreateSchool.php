<?php


namespace App\Administration\Application\Command;


use App\Shared\Command;

class CreateSchool implements Command
{
    private string $name;

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



}