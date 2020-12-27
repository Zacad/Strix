<?php


namespace App\Learning\Infrastructure\Service;


use App\Shared\Service\UuidValidatorInterface;
use Ramsey\Uuid\Uuid;

class UuidValidatorAdapter implements UuidValidatorInterface
{

    /**
     * @var UuidValidatorInterface
     */
    private $uuidValidator;

    public function __construct()
    {
    }


    public function isValid(string $uuid): bool
    {
        return Uuid::isValid($uuid);
    }
}