<?php namespace Shopavel\Customers;

use Shopavel\Orders\OrderInterface;

/**
 * Interface for customer models.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
interface CustomerInterface {

    public function orders();
    public function basket();
    public function save();

}