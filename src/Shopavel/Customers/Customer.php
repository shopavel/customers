<?php namespace Shopavel\Customers;

use Eloquent;

class Customer extends Eloquent implements CustomerInterface {

    protected $table = 'customers';

    protected $order;

    public function orders()
    {
        return $this->hasMany('Shopavel\Orders\Order');
    }

    public function getOrder()
    {
        if ($this->order == null)
        {
            $order = $this->orders()->orderBy('updated_at', 'desc')->first();
            $this->setOrder($order);
        }

        return $this->order;
    }

    public function setOrder(OrderInterface $order)
    {
        $this->order = $order;
    }

    public function addOrder(OrderInterface $order)
    {
        $order->customer_id = $this->id;
        $order->save();

        $this->setOrder($order);
    }

}