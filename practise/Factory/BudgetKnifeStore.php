<?php

/**
 * @property-read string $type
 */
final class BudgetKnifeStore extends KnifeStore_FactoryMethod {

    protected function createKnife(string $knifeType): Knife
    {
        if($knifeType === "steak") {
            return new BudgetSteakKnife();
        } else if($knifeType === "chef") {
            return new BudgetChefKnife();
        }
    }
}


$store = new BudgetKnifeStore();
$store->orderKnife("chef");