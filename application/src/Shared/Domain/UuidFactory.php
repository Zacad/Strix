<?php


namespace App\Shared\Domain;


use App\Shared\Service\UuidValidatorInterface;
use Ramsey\Uuid\Uuid as RamseyUuid;


final class UuidFactory
{
    /**
     * @var UuidValidatorInterface
     */
    private UuidValidatorInterface $uuidValidator;

    public function __construct(UuidValidatorInterface $uuidValidator)
    {
        $this->uuidValidator = $uuidValidator;
    }

    public function fromString(string $uuidString): Uuid
    {
        if ($this->uuidValidator->isValid($uuidString)) {
            return new Uuid($uuidString);
        }
        throw new InvalidValueException('this is not correct Uuid');
    }

    public function generateNew(): Uuid
    {
        $ramseyUuid = RamseyUuid::uuid4();
        return new Uuid($ramseyUuid->toString());
    }
}