<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\CustomerInterface;
use Shopavel\Customers\Repositories\CustomerRepositoryInterface;

class ExistsValidator implements CustomerValidatorInterface {

    public function validate(CustomerRepositoryInterface $repository, CustomerInterface $customer)
    {
        if ($repository->findByEmail($customer->email))
        {
            throw new \Exception("A customer already exists with this email address");
        }
    }

}