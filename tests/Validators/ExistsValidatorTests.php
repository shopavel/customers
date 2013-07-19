<?php

use Mockery as m;
use Shopavel\Customers\Validators\ExistsValidator;

class ExistsValidatorTests extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $repository = m::mock('Shopavel\Customers\Repositories\CustomerRepositoryInterface');
        $this->validator = new ExistsValidator($repository);

        $this->customer = m::mock('Shopavel\Customers\CustomerInterface');
        $this->customer->email = 'foo';
    }

    /**
     * @expectedException Exception
     */
    public function testSuspendedThrowsException()
    {
        $this->validator->repository->shouldReceive('findByEmail')->andReturn(true);
        $this->validator->validate($this->customer);
    }

    public function testActiveDoesNotThrowException()
    {   
        $this->validator->repository->shouldReceive('findByEmail')->andReturn(false);
        $this->validator->validate($this->customer);
    }
    
}