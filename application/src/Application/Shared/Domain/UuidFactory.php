<?php


namespace App\Application\Shared\Domain;


use App\Application\Shared\service\UuidValidator;
use Ramsey\Uuid\Uuid as RamseyUuid;


final class UuidFactory
{
    /**
     * @var UuidValidator
     */
    private UuidValidator $uuidValidator;

    public function __construct(UuidValidator $uuidValidator)
    {
        $this->uuidValidator = $uuidValidator;
    }

    public function fromString(string $uuidString): Uuid
    {
        if (!$this->uuidValidator->isValid($uuidString)) {
            return new Uuid;
        }
    }

    public function generateNew(): Uuid
    {
        $ramseyUuid = new RamseyUuid();
        return new Uuid($ramseyUuid->toString());
    }
}