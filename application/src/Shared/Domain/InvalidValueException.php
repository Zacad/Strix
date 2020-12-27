<?php


namespace App\Shared\Domain;


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