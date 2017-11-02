<?php

use pxgamer\WorldWideTorrents;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testCanBeInitialised()
    {
        $uploader = new WorldWideTorrents\Uploader();
        $this->assertInstanceOf(WorldWideTorrents\Uploader::class, $uploader);
    }
}
