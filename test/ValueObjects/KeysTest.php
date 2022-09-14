<?php
declare(strict_types=1);

namespace ValueObjects;

use JohnyProkie\MultichainClient\ValueObjects\Keys;

class KeysTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider validProvider
     */
    public function testFromArrayConstruct($data)
    {
        self::markTestIncomplete('TODO dataProvider');
        $keys = Keys::fromArray($data);
        self::assertSame($data, $keys->getKeys());
    }

    public function validProvider()
    {
        return[
            []
        ];
    }
}