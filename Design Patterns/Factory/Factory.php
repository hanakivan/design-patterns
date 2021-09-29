<?php

require_once "./KnifeType.php";

abstract class Factory {
    abstract public function createKnife(KnifeType $knifeType): Knife;
}