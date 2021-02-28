<?php


namespace App\Tests\Shared\Domain;


use App\Shared\Domain\Identity;
use App\Shared\Domain\InvalidValueException;
use App\Shared\Domain\IdentityFactory;
use App\Shared\Service\UuidValidatorInterface;
use App\Infrastructure\Service\UuidValidatorAdapter;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class UuidFactoryTest extends TestCase
{
    /**
     * @var UuidValidatorInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    private $validator;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->validator = $this->createMock(UuidValidatorInterface::class);
    }

    public function testCreateFromString()
    {
        $this->validator->method('isValid')->willReturn(true);
        $factory = new IdentityFactory($this->validator);
        $uuidObject = Uuid::uuid4();

        $uuid = $factory->fromString($uuidObject->toString());

        $this->assertInstanceOf(Identity::class, $uuid);
    }

    public function testFailCreateFromString()
    {
        $this->validator->method('isValid')->willReturn(false);
        $factory = new IdentityFactory($this->validator);
        $wrongUuid = 'some wrong string';

        $this->expectException(InvalidValueException::class);

        $uuid = $factory->fromString($wrongUuid);

        $this->fail('Expected InvalidValueException');
    }

    public function testGenerateNew()
    {
        $this->validator->method('isValid')->willReturn(true);
        $factory = new IdentityFactory($this->validator);
        $uuid = $factory->generateNew();

        $this->assertInstanceOf(Identity::class, $uuid);
    }
}