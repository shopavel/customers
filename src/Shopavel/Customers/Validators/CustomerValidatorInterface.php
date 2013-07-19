<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\CustomerInterface;

interface CustomerValidatorInterface {

    public function validate(CustomerInterface $customer);

}