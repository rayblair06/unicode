<?php

namespace Tests;

use Rayblair\Unicode\Unicode;
use PHPUnit\Framework\TestCase;

class UnicodeTest extends TestCase
{
    public function testUnicodeGetAllFunction()
    {
        $expectedCount = 126;

        $assertedCount = count(Unicode::getAll());

        $this->assertEquals($expectedCount, $assertedCount);
    }

    public function testUnicodeGetSingleFunction()
    {
        $expectedUnicode = '←';
        
        $assertedUnicode = Unicode::LEFT_ARROW;
        
        $this->assertEquals($expectedUnicode, $assertedUnicode);
    }
    
    public function testUnicodeGetEncodeSingleFunction()
    {
        $expectedUnicode = '\u2190';
        
        $assertedUnicode = Unicode::escape(Unicode::LEFT_ARROW);

        $this->assertEquals($expectedUnicode, $assertedUnicode);
    }
}
