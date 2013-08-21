<?php namespace Shopavel\Customers\Transaction;

use Shopavel\Transactions\Transaction;
use Shopavel\Customers\CustomerInterface;

/**
 * Customer registration transactions.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class RegistrationTransaction extends Transaction {

    public function register(CustomerInterface $customer)
    {
        $this->validate($customer);

        $customer->save();

        return $customer;
    }

}