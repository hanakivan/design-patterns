<?php

/**
 * @property-read string $type
 */
abstract class KnifeStore_FactoryMethod {

    public function orderKnife(string $knifeType): Knife
    {
        $knife = $this->createKnife($knifeType);

        $knife->sharpen();
        $knife->polish();
        $knife->package();

        return $knife;
    }

    abstract protected function createKnife(string $knifeType): Knife;
}