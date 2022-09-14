<?php
declare(strict_types=1);

namespace Commands;

use JohnyProkie\MultichainClient\Commands\ListStreamKeys;
use JohnyProkie\MultichainClient\ValueObjects\Key;
use JohnyProkie\MultichainClient\ValueObjects\Keys;
use PHPUnit\Framework\TestCase;

class ListStreamKeysTest extends TestCase
{
    /**
     * @dataProvider validProvider
     */
    public function testGetAttributes($keys, $count, $localOrder, $start, $verbose, $stream, $expectedResult)
    {
        $listStreamKeys = new ListStreamKeys();
        $parameters = $listStreamKeys->keys($keys)
            ->count($count)
            ->localOrdering($localOrder)
            ->start($start)
            ->verbose($verbose)
            ->stream($stream)
            ->getParameters();
        self::assertSame($expectedResult, $parameters);
    }

    public function validProvider()
    {
        return [
            [
                Keys::fromArray([new Key('1'), new Key('2'), new Key('3')]),
                0,
                false,
                3,
                true,
                'stream-1',
                []
            ]
        ];
    }
}