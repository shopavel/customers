<?php namespace Shopavel\Customers;

use Shopavel\Users\User;
use Shopavel\Users\UserInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Customer model.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class Customer extends Model implements CustomerInterface, UserInterface {

    /**
     * The database table used by the model.
     * 
     * @var string
     */
    protected $table = 'customers';

    /**
     * The related user model.
     * 
     * @var Shopavel\Users\User
     */
    protected $user;

    /**
     * The name of the user group.
     * 
     * @var string
     */
    protected $userGroup = 'customers';

    public function getOrders()
    {
        if (! $this->orders)
        {
            $this->orders = $this->orders()->get();
        }
        return $this->orders;
    }

    public function getBasket()
    {
        if (! $this->basket)
        {
            $this->basket = $this->basket()->get();
        }
        return $this->basket;
    }

    public function getUser()
    {
        if (! $this->user)
        {
            $this->user = $this->app['shopavel.user']->findByEmail($this->email);
        }

        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * List of orders related to the customer
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('Shopavel\Orders\Order');
    }

    /**
     * The latest open order for the customer
     * 
     * @return Shopavel\Orders\Basket
     */
    public function basket()
    {
        return $this->hasMany('Shopavel\Orders\Basket')
                    ->where('status', '=', 'active')
                    ->orderBy('updated_at', 'desc')
                    ->first();
    }
}