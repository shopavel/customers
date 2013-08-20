<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\Repositories\CustomerRepositoryInterface;

class RepositoryValidator {

    /**
     * Customers repository
     * 
     * @var CustomerRepositoryInterface
     */
    public $customers;

    /**
     * Constructor
     * 
     * @param CustomerRepositoryInterface $customers
     */
    public function __construct(CustomerRepositoryInterface $customers)
    {
        $this->customers = $customers;
    }

}