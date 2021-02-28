<?php


namespace App\Tests\Learning\Domain;


use App\Administration\Domain\SchoolName;
use PHPUnit\Framework\TestCase;

class SchoolNameTest extends TestCase
{
    public function testSettingName()
    {
        $schoolName = SchoolName::fromString('someName');
        $this->assertEquals('someName', $schoolName->name());
    }

    public function testComparingSame()
    {
        $schoolName1 = SchoolName::fromString('someName');
        $schoolName2 = SchoolName::fromString('someName');

        $this->assertTrue($schoolName1->isEqual($schoolName2));
    }

    public function testComparingDifferent()
    {
        $schoolName1 = SchoolName::fromString('someName');
        $schoolName2 = SchoolName::fromString('otherName');

        $this->assertFalse($schoolName1->isEqual($schoolName2));
    }

}