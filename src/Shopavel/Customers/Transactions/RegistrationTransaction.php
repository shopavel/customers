<?php namespace Shopavel\Customers\Transaction;

use Shopavel\Transactions\Transaction;
use Shopavel\Customers\CustomerInterface;

class RegistrationTransaction extends Transaction {

    public function login(CustomerInterface $customer)
    {
        $this->validate($customer);

        $customer->save();
    }

}