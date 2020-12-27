<?php


namespace App\Shared\Domain;


use App\Shared\Service\UuidValidatorInterface;

final class Uuid
{
    private string $uuid;

    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }

    public function isEqual(Uuid $otherUuid): bool
    {
        return $this->uuid === $otherUuid->uuid();
    }

    public function uuid(): string
    {
        return $this->uuid;
    }
}