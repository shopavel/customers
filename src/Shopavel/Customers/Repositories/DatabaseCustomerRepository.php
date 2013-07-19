<?php namespace Shopavel\Customer\Repositories;

class DatabaseCustomerRepository implements CustomerRepositoryInterface {

    public function __construct(DatabaseConnection $db)
    {
        $this->db = $db;
    }

    public function findByEmail($email)
    {
        return $this->db->selectOne("SELECT id FROM customers WHERE email = ?", array($email));
    }

}