<?php namespace Shopavel\Customers\Transaction;

use Shopavel\Transactions\Transaction;
use Shopavel\Customers\CustomerInterface;

class OrderTransactions extends Transaction {

    public function addOrder(CustomerInterface $customer, OrderInterface $order)
    {
        $this->db->table('customer_order')->insert(array(
            'customer_id' => $customer->id,
            'order_id' => $order->id,
        ));
    }

}