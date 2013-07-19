<?php namespace Shopavel\Customers;

class CustomerLoginProcessor {

    public function process(CustomerInterface $customer)
    {
        $this->validate($customer);

        $customer->save();
    }

    public function validate(CustomerInterface $customer)
    {
        foreach ($this->validators as $validator)
        {
            $validator->validate($customer);
        }
    }

}