<?php namespace Shopavel\Customers;

use Shopavel\Orders\OrderInterface;

interface CustomerInterface {

    public function orders();
    public function basket();
    public function save();

}