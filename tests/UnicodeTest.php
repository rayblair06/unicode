<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Rayblair\Unicode\Unicode;

class UnicodeTest extends TestCase
{
    public function testUnicodeGetAllFunction()
    {
        $expectedCount = 154998;

        $assertedCount = count(Unicode::getAll());

        $this->assertEquals($expectedCount, $assertedCount);
    }

    public function testUnicodeGetFunction()
    {
        $expectedCount = 100;

        $assertedCount = count(Unicode::get(100));

        $this->assertEquals($expectedCount, $assertedCount);
    }

    public function testUnicodeRangeHexFunction()
    {
        $expectedCount = 26;

        $assertedCount = count(Unicode::range('0041', '005A'));

        $this->assertEquals($expectedCount, $assertedCount);
    }

    public function testUnicodeGetSingleFunction()
    {
        $expectedUnicode = '←';

        $assertedUnicode = Unicode::LEFTWARDS_ARROW;

        $this->assertEquals($expectedUnicode, $assertedUnicode);
    }

    public function testUnicodeGetEncodeSingleFunction()
    {
        $expectedUnicode = '\u2190';

        $assertedUnicode = Unicode::escape(Unicode::LEFTWARDS_ARROW);

        $this->assertEquals($expectedUnicode, $assertedUnicode);
    }
}
