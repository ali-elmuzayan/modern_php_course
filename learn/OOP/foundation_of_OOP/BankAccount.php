<?php


class BankAccount {
    public string $nr;
    public string $holder;
    public string $balance;

//    properties:
    public function print_balance(): string
    {
        return 'The balance of account #' . $this->nr . ' is ' . $this->balance;
    }
}

$account1 = new BankAccount();
$account1->nr = "0";
$account1->holder = "Ali Ahmed";
$account1->balance = "100";

echo $account1->print_balance();