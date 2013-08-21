<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\Repositories\CustomerRepositoryInterface;

/**
 * Parent repository validator.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
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