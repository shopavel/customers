<?php namespace Shopavel\Customers;

use Shopavel\Customers\Repositories\CustomerRepositoryInterface;

class CustomerRegistrationProcessor {

    public function process(CustomerRepositoryInterface $repository, CustomerInterface $customer)
    {        
        $this->validate($repository, $customer);

        $customer->save();
    }

    public function validate(CustomerRepositoryInterface $repository, CustomerInterface $customer)
    {
        foreach ($this->validators as $validator)
        {
            $validator->validate($repository, $customer);
        }
    }

}