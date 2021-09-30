<?php

abstract class PastaDish {
    final public function makeDish() {
        $this->boil();
        $this->addPasta();
        $this->addSauce();
        $this->addProtein();
        $this->addGarnish();
    }

    protected abstract function addPasta(): void;
    protected abstract function addSauce(): void;
    protected abstract function addProtein(): void;
    protected abstract function addGarnish(): void;

    private function boil(): void {
        echo "boiling wata";
    }
}