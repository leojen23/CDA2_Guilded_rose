<?php

declare(strict_types=1);

namespace Tests;

use App\ItemInterface;
use App\UpdaterFactoryRegistry;
use PHPUnit\Framework\TestCase;

class UpdaterFactoryRegistryTest extends TestCase
{
    public function testResolveReturnString() {
    
        $item = $this->createMock(ItemInterface::class);
              
        $updaterFactoryRegistry = new UpdaterFactoryRegistry();

        $newUpdater = $updaterFactoryRegistry->resolve($item);

        $this->assertIsString($newUpdater);
    }
}