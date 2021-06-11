<?php

namespace App\Updater;

use App\ItemInterface;

interface IUpdater
{
    public static function resolve(ItemInterface $item):bool;
 
    public function updateSellIn():void;
 
    public function update():void;
}