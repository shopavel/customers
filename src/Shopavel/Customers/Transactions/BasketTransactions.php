<?php namespace Shopavel\Customers\Transaction;

use Shopavel\Transactions\Transaction;
use Shopavel\Customers\CustomerInterface;

class BasketTransactions extends Transaction {

    public function setBasket(CustomerInterface $customer, BaksetInterface $basket)
    {
        $basket->customer_id = $customer;
        $basket->save();
    }

}