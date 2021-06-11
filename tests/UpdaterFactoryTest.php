<?php

declare(strict_types=1);

namespace Tests;

use App\ItemInterface;
use App\IUpdaterFactoryRegistry;
use App\Updater\ConjuredItemUpdater;
use App\Updater\IUpdater;
use App\UpdaterFactory;

use PHPUnit\Framework\TestCase;

class UpdaterFactoryTest extends TestCase
{
    public function testBuilderTheCorrectUpdater() 
    {
        $item = $this->createMock(ItemInterface::class);

        $updater = $this->createMock(IUpdater::class);
                        
        $factoryRegistry=$this->createMock(IUpdaterFactoryRegistry::class);
        $factoryRegistry->method('resolve')->willReturn(get_class($updater));

        $updaterFactory = new UpdaterFactory($factoryRegistry);

        $newUpdater = $updaterFactory->build($item);

        $this->assertSame(get_class($newUpdater),get_class($updater) );
           
    }
}