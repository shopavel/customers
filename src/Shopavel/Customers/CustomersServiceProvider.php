<?php namespace Shopavel\Customers;

use Illuminate\Support\ServiceProvider;

/**
 * Customers service provider.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class CustomersServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('shopavel/customers');

        $this->app->bind('Shopavel\Customers\Repositories\CustomerRepositoryInterface',
            'Shopavel\Customers\Repositories\CapsuleCustomerRepository');

        $this->app['customer'] = $this->app->share(function($app)
        {
            return new Customer;
        });

        $this->app['customer.registration'] = $this->app->share(function($app)
        {
            return new Transactions\RegistrationTransaction();
        });

        $this->app['customer.auth'] = $this->app->share(function($app)
        {
            return new Transactions\AuthTransaction();
        });

        $this->app['customer.register'] = $this->app->share(function($app)
        {
            return new Transactions\RegistrationTransaction(array(
                new Validators\ExistsValidator(),
            ));
        });

        $this->app['customer.orders'] = $this->app->share(function($app)
        {
            return new Transactions\OrderTransactions();
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('customer', 'customer.login', 'customer.register', 'customer.orders');
    }

}