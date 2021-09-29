<?php

class CoffeeTouchscreenAdapter implements CoffeeMachineInterface {

    public function __construct(private OldCoffeeMachine $oldCoffeeMachine)
    {

    }

    public function chooseFistSelection(): void
    {
        $this->oldCoffeeMachine->selectA();
    }

    public function chooseSecondSelection(): void
    {
        $this->oldCoffeeMachine->selectB();
    }
}