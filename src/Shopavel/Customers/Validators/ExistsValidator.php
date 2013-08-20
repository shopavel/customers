<?php namespace Shopavel\Customers\Validators;

use Exception;
use Shopavel\Customers\CustomerInterface;

/**
 * Customer exists validator.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class ExistsValidator extends RepositoryValidator implements CustomerValidatorInterface {

    public function validate(CustomerInterface $customer)
    {
        if ($this->customers->findByEmail($customer->email))
        {
            throw new Exception("A customer exists with this email address", CustomerErrors::EMAIL_EXISTS);
        }
    }

}