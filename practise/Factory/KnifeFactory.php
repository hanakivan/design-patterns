<?php

class KnifeFactory {

    public function createKnife(string $knifeType): Knife
    {
        $knife = null;

        if($knifeType === "chef") {
            $knife = new ChefKnife();
        } else if ($knifeType === "steak") {
            $knife = new SteakKnife();
        } else if ($knifeType === "vegetable") {
            $knife = new VegetableKnife();
        }

        return $knife;
    }
}