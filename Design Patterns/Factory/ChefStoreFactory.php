<?php

require_once "./KnifeType.php";

final class ChefStoreFactory extends Factory {

    public function createKnife(KnifeType $knifeType): Knife
    {
        switch($knifeType) {
            case KnifeType::Kitchen:
                return new KitchenKnife();
            case KnifeType::Steak:
                return new SteakKnife();
        }
    }
}