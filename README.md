Customers package for Shopavel
==============================

Installation
------------

Add `"shopavel/customers": "1.0.*"` to your `composer.json` and run `composer update`.


Configuration
-------------

In `app/config/app.php` add `'Shopavel\Customers\CustomersServiceProvider'` to your `providers` list and `'Customer' => 'Shopavel\Customers\Facades\Customer'` to your `aliases` list.


Usage
-----

### Registration

Use the `customer.registration` service to register customers.

**Register a customer**

```php
app('customer.registration')->register($customer);
```

### Authorisation

Use the `customer.auth` service to manage authentication of customers.

**Authenticate a customer**

```php
app('customer.auth')->authenticate($email, $password);
```

**Log out a customer**

```php
app('customer.auth')->logout();
```

### Basket

Use the `customer.basket` service to manage the customer's basket.

**Set the customers basket**

```php
app('customer.basket')->setBasket($customer, $basket);
```

### Orders

Use the `customer.orders` service to access the customer's orders.

**Add an order to a customer**

```php
app('customer.orders')->addOrder($customer, $order);
```

License
-------

All Shopavel packages are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)