<?php namespace Shopavel\Customers;

use Shopavel\Orders\OrderInterface;

interface CustomerInterface {

    public function orders();
    public function getOrder();
    public function setOrder(OrderInterface $order);
    public function addOrder(OrderInterface $order);

}