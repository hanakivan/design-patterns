<?php

final class CheckingAccount implements IAccount {

    private float $initialAmount;

    public function __construct(float $initialAmount)
    {
        $this->initialAmount = $initialAmount;
    }

    public function debit(float $amount): void
    {
        $this->initialAmount -= $amount;
    }

    public function credit(float $amount): void
    {
        $this->initialAmount += $amount;
    }
}