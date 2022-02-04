<?php 


namespace App\EventSuscriber;

class BasketProductAdded extends Event
{
    const Name = 'basket.product_added';

    private $product;
    private $customer;

    public function __construct(Product $product, Customer $customer)
    {
        $this->product = $product;
        $this->customer = $customer;
        
    }
    public function getProduct(){

        return $this->product;

    }
    public function getCustomer(){
        
        return $this->customer;
        
    }

}