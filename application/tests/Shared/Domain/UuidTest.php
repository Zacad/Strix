<?php


namespace App\Tests\Shared\Domain;


use App\Shared\Domain\Uuid;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid as UuidObject;

class UuidTest extends TestCase
{
    public function testConstructCorrectly()
    {
        $uuidObject = UuidObject::uuid4();
        $uuid = new Uuid($uuidObject->toString());

        $this->assertEquals($uuidObject->toString(), $uuid->uuid());
    }

    public function testComparisonEqual()
    {
        $uuidObject = UuidObject::uuid4();
        $uuid = new Uuid($uuidObject->toString());

        $otherUuid = new Uuid($uuidObject->toString());

        $this->assertTrue($uuid->isEqual($otherUuid));
    }

    public function testComparisonDiffrent()
    {
        $uuidObject = UuidObject::uuid4();
        $uuid = new Uuid($uuidObject->toString());

        $uuidObject = UuidObject::uuid4();
        $otherUuid = new Uuid($uuidObject->toString());

        $this->assertFalse($uuid->isEqual($otherUuid));
    }
}