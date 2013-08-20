<?php namespace Shopavel\Customers\Transaction;

use Shopavel\Transactions\Transaction;
use Shopavel\Customers\CustomerInterface;

class AuthTransaction extends Transaction {

    public function login(CustomerInterface $customer)
    {
        $this->validate($customer);

        // store in session
    }

    public function logout(CustomerInterface $customer)
    {
        // delete session
    }

}