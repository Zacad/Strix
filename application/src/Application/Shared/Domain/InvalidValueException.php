<?php


namespace App\Application\Shared\Domain;


class InvalidValueException extends \Exception
{

    /**
     * InvalidValueException constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
    }
}