<?php namespace Shopavel\Customers\Controllers;

use Shopavel\Controllers\Controller;
use Cartalyst\Sentry\Users\UserNotFoundException;

class AuthController extends Controller {

    public function login()
    {
        $customer = $this->app['shopavel.customer.auth']->authenticate(Input::get('email'), Input::get('password'));

        return $this->redirect()->route('shopavel.customers.dashboard', array('customerID' => $customer->id));
    }

    public function logout()
    {
        $this->app['shopavel.customer.auth']->logout();
    }

}