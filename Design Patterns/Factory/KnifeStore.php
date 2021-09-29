<?php

require_once "./KnifeType.php";
require_once "./KitchenKnife.php";
require_once "./SteakKnife.php";
require_once "./Factory.php";

class KnifeStore {

    public function orderKnife(KnifeType $orderType): Knife
    {
        $factory = new Factory();
        $knife = $factory->createKnife($orderType);

        $knife->sharpen();
        $knife->polish();
        $knife->package();

        return $knife;
    }
}

$store = new KnifeStore();
$knife = $store->orderKnife(KnifeType::Steak);

var_dump($knife);

