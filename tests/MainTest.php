<?php

namespace pxgamer\WorldWideTorrents;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testCanBeInitialised()
    {
        $uploader = new Uploader();
        $this->assertInstanceOf(Uploader::class, $uploader);
    }
}
