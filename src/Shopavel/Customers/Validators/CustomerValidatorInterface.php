<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\CustomerInterface;
use Shopavel\Customers\Repositories\CustomerRepositoryInterface;

interface CustomerValidatorInterface {

    public function validate(CustomerRepositoryInterface $repository, CustomerInterface $customer);

}