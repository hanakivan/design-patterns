<?php

/**
 * @property-read string $type
 */
abstract class KnifeStore {

    public function __construct(public readonly KnifeFactory $knifeFactory)
    {

    }

    public function orderKnife(string $knifeType): Knife
    {
        $knife = $this->knifeFactory->createKnife($knifeType);

        $knife->sharpen();
        $knife->polish();
        $knife->package();

        return $knife;
    }

    public function sharpen() {}
    public function polish() {}
    public function package() {}
}