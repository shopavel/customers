<?php namespace Shopavel\Customers\Transaction;

use Shopavel\Transactions\Transaction;
use Shopavel\Customers\CustomerInterface;

/**
 * Customer basket transactions.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class BasketTransactions extends Transaction {

    public function setBasket(CustomerInterface $customer, BaksetInterface $basket)
    {
        $basket->customer_id = $customer->id;
        $basket->save();
    }

}