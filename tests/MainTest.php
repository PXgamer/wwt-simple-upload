<?php

use pxgamer\WorldWideTorrents;

class MainTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInitialised()
    {
        $upload = new WorldWideTorrents\Upload();
        $this->assertInstanceOf(WorldWideTorrents\Upload::class, $upload);
    }
}
