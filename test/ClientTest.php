<?php

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function testInvalid()
    {
        self::assertTrue(false, 'ouch');
    }

    public function testSleep()
    {
        sleep(10);
        self::assertTrue(true);
    }
}