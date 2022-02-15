<?php

class Customer {

    public function __construct(private readonly BankingService $bankingService) {
        $savings = $this->bankingService->createAccount("savings", 0);
        $checking = $this->bankingService->createAccount("checking", 1000);

        $this->bankingService->transferMoney($checking, $savings, 300);
    }
}