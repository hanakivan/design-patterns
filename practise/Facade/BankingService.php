<?php

class BankingService {
    public function createAccount(string $type, $initialAmount): IAccount
    {
        if($type === "checking") {
            $account = new CheckingAccount($initialAmount);
        } else if ($type === "savings") {
            $account = new SavingsAccount($initialAmount);
        }

        return $account;
    }

    public function transferMoney(IAccount $from, IAccount $to, float $amount)
    {
        $from->debit($amount);
        $to->credit($amount);
    }
}