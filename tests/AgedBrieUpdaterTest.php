<?php

declare(strict_types=1);

namespace Tests;

use App\Item;
use App\ItemInterface;
use App\Updater\AgedBrieUpdater;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class AgedBrieUpdaterTest extends TestCase
{
    public function testResolveReturnsTrue()
    {
        $item = $this ->getMockBuilder(ItemInterface::class)
                      ->getMock();
        $item->name = 'Aged Brie';
        $ageBrieUpdater = new AgedBrieUpdater($item);

    $this->assertTrue($ageBrieUpdater->resolve($item));
    //$this->assertTrue('Elixir of the Mongoose, 5, 3', $item->__toString());
    }
}