<?php


namespace App\Application\Shared\Domain;


use App\Application\Shared\service\UuidValidator;

final class Uuid
{
    private string $uuid;

    public function __construct(string $uuid, UuidValidator $uuidValidator)
    {
        if (!$uuidValidator->isValid($uuid)) {
            throw new InvalidValueException('this is not valid Uuid');
        }
        $this->uuid = $uuid;
    }

    public function isEqual($otherUuid)
    {
        return $this->uuid === $otherUuid;
    }

    public function uuid()
    {
        return $this->uuid;
    }
}