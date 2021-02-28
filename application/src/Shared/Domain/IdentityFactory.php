<?php


namespace App\Shared\Domain;


use App\Shared\Service\UuidValidatorInterface;
use Ramsey\Uuid\Uuid as RamseyUuid;


final class IdentityFactory
{
    /**
     * @var UuidValidatorInterface
     */
    private UuidValidatorInterface $uuidValidator;

    public function __construct(UuidValidatorInterface $uuidValidator)
    {
        $this->uuidValidator = $uuidValidator;
    }

    public function fromString(string $uuidString): Identity
    {
        if ($this->uuidValidator->isValid($uuidString)) {
            $uuid = \Ramsey\Uuid\Uuid::fromString($uuidString);
            return new Identity($uuid);
        }
        throw new InvalidValueException('this is not correct Uuid');
    }

    public function generateNew(): Identity
    {
        $ramseyUuid = RamseyUuid::uuid4();
        return new Identity($ramseyUuid);
    }
}