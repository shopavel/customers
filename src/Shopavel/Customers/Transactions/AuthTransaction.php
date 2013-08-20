<?php namespace Shopavel\Customers\Transaction;

use Shopavel\Transactions\Transaction;
use Shopavel\Customers\CustomerInterface;

class AuthTransaction extends Transaction {

    public function authenticate($email, $password)
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

        return $customer;
    }

    public function logout(CustomerInterface $customer)
    {
        $this->app['sentry']->logout();
    }

}