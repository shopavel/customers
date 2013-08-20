<?php namespace Shopavel\Customers\Controllers;

use Shopavel\Controllers\Controller;
use Cartalyst\Sentry\Users\UserNotFoundException;

class AuthController extends Controller {

    public function login()
    {
        $user = $this->app['sentry']->authenticate(array(
            'login' => $email,
            'password' => $password
        ));

        if (! $user->inGroup('customers'))
        {
            throw new UserNotFoundException("The user was not found in the group 'customers'");
        }

        $customer = Customer::where('user_id', '=', $user->id)->take(1)->get();

        return $this->redirect()->route('shopavel.customers.dashboard', array('customerID' => $customer->id));
    }

    public function logout()
    {
        $this->app['sentry']->logout();
    }

}