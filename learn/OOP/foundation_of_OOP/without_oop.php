<?php
header('content-type: text/plain');

$account1 = [
    'nr' => '0001000100010001',
    'holder' => 'Ali Ahmed',
    'balance' => 2500.00,
];

$account2 = [
    'nr' => '0002000200020002',
    'holder' => 'Abdo Marwan',
    'balance' => 25500.00,
];

function print_balance(array $accounts)
{
    echo "The balance of account #{$accounts['nr']} is {$accounts['balance']}.\n";
}

function transfer(array &$from, array &$to, float|int $amount): bool
{
    if ($from['balance'] >= $amount) {
        $from['balance'] -= $amount;
        $to['balance'] += $amount;
        return true;
    }
    return true;

}


print_balance($account1);
print_balance($account2);
transfer($account2, $account1, 1000);
print_balance($account1);
print_balance($account2);