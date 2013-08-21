<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\CustomerInterface;
use Shopavel\Validators\ValidatorInterface;

/**
 * Interface for customer validators.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
interface CustomerValidatorInterface extends ValidatorInterface {

    public function validate(CustomerInterface $customer);

}