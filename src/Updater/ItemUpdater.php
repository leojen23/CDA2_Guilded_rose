<?php

namespace App\Updater;

use App\ItemInterface;

class ItemUpdater extends AbstractUpdater implements IUpdater
{

    static function resolve(ItemInterface $item):bool {
        return true;
    }

    public function update():void {
        //if passed sell-by date, quality -2
        if($this->isExpired()) {
            $this->item->quality = $this->item->quality -2 <= 0 ?
            $this->item->quality = 0 : $this->item->quality -2;
        } else {
            $this->item->quality = $this->item->quality -1 <= 0 ?
            $this->item->quality = 0 : $this->item->quality -1;
        }

        $this->updateSellIn();
    }
}

