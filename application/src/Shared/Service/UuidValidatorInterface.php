<?php


namespace App\Shared\Service;


interface UuidValidatorInterface
{
    public function isValid(string $uuid): bool;
}