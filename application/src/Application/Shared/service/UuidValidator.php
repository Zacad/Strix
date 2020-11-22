<?php


namespace App\Application\Shared\service;


interface UuidValidator
{
    public function isValid(string $uuid): bool;
}