<?php
namespace App;

class Product
{

    /**
     * [Description for $product_id]
     *
     * @var integer
     */
    protected $product_id;

    /**
     * [Description for __construct]
     * @return void
     */
    public function __construct()
    {
        $this->product_id = rand();
    }
}
