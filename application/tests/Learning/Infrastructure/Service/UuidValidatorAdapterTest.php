<?php


namespace App\Tests\Infrastructure\Service;


use App\Learning\Infrastructure\Service\UuidValidatorAdapter;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class UuidValidatorAdapterTest extends TestCase
{
    public function testValidationCorrect()
    {
        $validator = new UuidValidatorAdapter();
        $testUuid = '99fbf0cb-9e5e-49b1-aa51-aa59c5d669eb';
        $this->assertTrue($validator->isValid($testUuid));

        $nilUuid = '00000000-0000-0000-0000-000000000000';
        $this->assertTrue($validator->isValid($nilUuid));
    }

    public function testValidationInCorrect()
    {
        $validator = new UuidValidatorAdapter();

        $testUuidToShort = '99fbf0cb-9e5e-49b1-aa51-aa59c5d669e';
        $this->assertFalse($validator->isValid($testUuidToShort));

        $testUuidNoDash = '99fbf0cb_9e5e_49b1_aa51_aa59c5d669eb';
        $this->assertFalse($validator->isValid($testUuidNoDash));

    }
}