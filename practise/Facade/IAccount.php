<?php

interface IAccount {
    public function __construct(float $initialAmount);

    public function debit(float $amount): void;
    public function credit(float $amount): void;
}