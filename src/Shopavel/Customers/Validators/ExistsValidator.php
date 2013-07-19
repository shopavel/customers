<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\CustomerInterface;

class ExistsValidator extends RepositoryValidator implements CustomerValidatorInterface {

    public function validate(CustomerInterface $customer)
    {
        if ($this->repository->findByEmail($customer->email))
        {
            throw new \Exception("A customer already exists with this email address");
        }
    }

}