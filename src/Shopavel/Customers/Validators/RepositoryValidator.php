<?php namespace Shopavel\Customers\Validators;

use Shopavel\Customers\Repositories\CustomerRepositoryInterface;

class RepositoryValidator {

    public $repository;

    public function __construct(CustomerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}