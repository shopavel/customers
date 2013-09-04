<?php namespace Shopavel\Customers\Repositories;

class CapsuleCustomerRepository implements CustomerRepositoryInterface {

    /**
     * Capsule query builder.
     * 
     * @var Capsule
     */
    protected $capsule;

    /**
     * Create the capsules.
     * 
     * @param Capsule  $capsule
     */
    public function __construct(Capsule $capsule)
    {
        $this->capsule = $capsule;
    }

    public function findByEmail($email)
    {
        return $this->capsule->table('customers')->where('email', '=', $email)->get();
    }

}