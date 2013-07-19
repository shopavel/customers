<?php

use Mockery as m;
use Shopavel\Customers\Validators\ExistsValidator;

class ExistsValidatorTests extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->repository = m::mock('Shopavel\Customers\Repositories\CustomerRepositoryInterface');
        $this->validator = new ExistsValidator;
    }

    /**
     * @expectedException Exception
     */
    public function testSuspendedThrowsException()
    {
        $customer = m::mock('Shopavel\Customers\CustomerInterface');
        $customer->email = 'foo';

        $this->repository->souldReceive('findByEmail')->andReturn(true);

        $this->validator->validate($this->repository, $$customer);
    }

    public function testActiveDoesNotThrowException()
    {
        $customer = m::mock('Shopavel\Customers\CustomerInterface');
        $customer->email = 'foo';
        
        $this->repository->shouldReceive('findByEmail')->andReturn(false);

        $this->validator->validate($this->repository, $customer);
    }
    
}