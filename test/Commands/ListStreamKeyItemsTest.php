<?php
declare(strict_types=1);

namespace Commands;

use JohnyProkie\MultichainClient\Commands\ListStreamKeyItems;
use JohnyProkie\MultichainClient\ValueObjects\Key;
use PHPUnit\Framework\TestCase;

class ListStreamKeyItemsTest extends TestCase
{
    /**
     * @dataProvider validProvider
     */
    public function testGetAttributes($key, $count, $localOrder, $start, $verbose, $stream, $expectedResult)
    {
        $listStreamKeys = new ListStreamKeyItems();
        $parameters = $listStreamKeys->key($key)
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
                new Key('3'),
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