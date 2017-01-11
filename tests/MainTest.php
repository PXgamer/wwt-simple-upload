<?php

use pxgamer\WorldWideTorrents;

class MainTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInitialised()
    {
        $uploader = new WorldWideTorrents\Uploader();
        $this->assertInstanceOf(WorldWideTorrents\Uploader::class, $uploader);
    }
}
