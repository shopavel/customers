<?php

use Mockery as m;

class CustomerRegistrationProcessorTests extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->repository = m::mock('Shopavel\Customers\Repositories\CustomerRepositoryInterface');
    }

    public function testValidate()
    {
        
    }

    public function testProcess()
    {

    }

}