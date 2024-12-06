<?php

// Object oriented programming:
/*
 * - It 's a different way to structure our code
 * - This allows us to write more modular code - and thus, we can keep
 *   track of even larger projects
 * - We can bundle functions into classes and more easily find them.
 * - NO more colliding function names
 * In short
 * - we will be able to develop more complex applications in PHP!
 *
 */


// Why do we need it ?
/*
 * A function rarely stands for itself - it usually works or exists with
 * data
 * Example:
 *  - let's consider a banking startup, and we want to model bank accounts
 *  - A bank account has various properties:
 *     - Account number
 *     - Current account balance
 *     - Account holder
 *     - Overdraft possible ? how much?
 *     - Transaction history
 *  - In addition, a bank account has various methods:
 *    (functions that work directly with this data):
 *     - Perform a wire transfer (if balance allows it)
 *     - Calculate statistic
 *     - And much more
 */


// class
/*
 * class is the blueprint for an objects
 * - an instance is an individual realization of a class
 */

// properties and methods:
/*
 * properties is the variable of the class
 * Note:
 *  - if it public you can override it directly
 *  - you can set a default value of teh property
 *
 * Methods
 *  - method is the function of the class
 *  - naming convention => camelCase
 *
 * $this
 *  - representing the current instance
 */


// constructor:
/*
 * by initialize an instance of the class the constructor will br called
 * - you can pass parameter to the constructor
 * - by constructor what ever parameter you pass to it
 *   that mean you cannot initialize an instance without those values
 *
 * you can write the property directly in the constructor
 *  function __constructor(public string $nr,
 *                    public string $holder, public float $balance)
 * this is better than
 *  - first initialize the property
 *  - then pass argument to the constructor
 *  - then assign the argument to the property
 *
 */

// how can we protect our properties (private)
/*
 * - by protecting the property no one can suddenly adjust it.
 * - to ensure that some verification before set the value of teh property
 * then
 * - to get the value use get function and to set the value use set
 */

// you can also use private with method
/*
 * it will be more as a helper function which mean you can access withing
 * the class while out of the class it will be invisible
 */

class  BankAccount
{
    function  __construct(private string $nr, private string $holder,
                          private float $balance) { }

    function getBalance() {
        return $this->balance;
    }

//    function setBalance(float $balance) {
//        $this->balance = $balance;
//    }
    function transfer(BankAccount $to, float|int $amount = 0):bool {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            $to->balance += $amount;
            return true;
        }else {
            return false;
        }
    }
}

$acount1 = new BankAccount('101010000', 'Ali Ahmed', 25000);
echo $acount1->getBalance();