<?php

namespace App;
use App\ItemInterface;

interface IUpdaterFactoryRegistry
{
    public function resolve(ItemInterface $item):string;

    public function register(string $updater): void;
}