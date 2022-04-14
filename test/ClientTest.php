<?php

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function testInvalid()
    {
        self::assertTrue(false, 'ouch');
    }
}