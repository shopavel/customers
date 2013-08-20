<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\CustomerInterface;
use Shopavel\Validators\ValidatorInterface;

interface CustomerValidatorInterface extends ValidatorInterface {

    public function validate(CustomerInterface $customer);

}