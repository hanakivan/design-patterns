<?php

require_once dirname(__FILE__)."/State.php";

class VendingMachine {

    public State $currentState;

    public function __construct(private int $count)
    {
        if($count > 0) {
            $this->currentState = State::$HasOneDollar;
        } else {
            $this->currentState = State::$OutOfStock;
        }
    }

    public function insertCoin(): void {
        if($this->currentState === State::$Idle) {
            $this->currentState = State::$HasOneDollar;
        } else if ($this->currentState === State::$HasOneDollar) {
            $this->ejectMoney();
            $this->currentState = State::$Idle;
        } else if($this->currentState === State::$OutOfStock) {
            $this->ejectMoney();
        }
    }

    public function ejectMoney(): void{}

    public function dispense(): void{}
}

$vc = new VendingMachine(0);

var_dump($vc->currentState);