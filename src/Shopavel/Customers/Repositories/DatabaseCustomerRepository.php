<?php namespace Shopavel\Customer\Repositories;

class DatabaseCustomerRepository implements CustomerRepositoryInterface {

    public function findByEmail($email)
    {
        return $this->app['db']->selectOne("SELECT id FROM customers WHERE email = ?", array($email));
    }

}