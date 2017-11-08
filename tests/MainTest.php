<?php

namespace pxgamer\WorldWideTorrents;

use PHPUnit\Framework\TestCase;

/**
 * Class MainTest
 */
class MainTest extends TestCase
{
    /**
     * Test that the class can be initialised
     */
    public function testCanBeInitialised()
    {
        $uploader = new Uploader();
        $this->assertInstanceOf(Uploader::class, $uploader);
    }
}
