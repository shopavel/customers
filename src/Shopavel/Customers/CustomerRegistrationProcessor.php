<?php namespace Shopavel\Customers;

use Illuminate\Container\Container;

class CustomerRegistrationProcessor {

    protected $app;

    public function process(Container $app, CustomerInterface $customer)
    {
        $this->app = $app;
        
        $this->validate($customer);

        $customer->save();
    }

    public function validate(CustomerInterface $customer)
    {
        foreach ($this->validators as $validator)
        {
            $validator->validate($this->app, $customer);
        }
    }

}