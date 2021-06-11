<?php

namespace App;
use App\ItemInterface;
use App\Updater\IUpdater;

interface IUpdaterFactory
{
    public function build(ItemInterface $item):IUpdater;
}