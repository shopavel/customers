<?php namespace Shopavel\Customers\Repositories;

interface CustomerRepositoryInterface {

    public function findByEmail($email);

}