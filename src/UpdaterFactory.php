<?php

namespace App;

use App\Updater\IUpdater;

class UpdaterFactory implements IUpdaterFactory
{

    private IUpdaterFactoryRegistry $updaterFactoryRegistry;

    public function __construct(IUpdaterFactoryRegistry $registry)
    {
        $this->updaterFactoryRegistry = $registry;
    }

    
    protected static function newClass(string $className, ItemInterface $item):IUpdater
    {
        $updater = new $className($item);
        return $updater;
    }


    public function build(ItemInterface $item):IUpdater
    {
        $className = $this->updaterFactoryRegistry->resolve($item);
        return self::newClass($className, $item);
    }
}
