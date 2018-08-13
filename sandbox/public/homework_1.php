<?php

class Product{
    protected $id;
    protected $productName;
    protected $productPrice;
    protected $qty;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getProductName(){
        return $this->productName;
    }

    public function getProductPrice(){
        return $this->productPrice;
    }

    public function getQty(){
        return $this->qty;
    }

    public function setProductName($productName){
        return $this->productName = $productName;
    }

    public function setProductPrice($productPrice){
        return $this->productPrice = $productPrice;
    }

    public function setQty($qty){
        return $this->qty = $qty;
    }

}

class Shoes extends Product{
    protected $brand;

    public function getBrand(){
        return $this->$brand;
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }
}


// Create New Instances
$product = new Product(1);
$product->setProductName('Shoes');
$product->setProductPrice(100.00);
$product->setQty(1);

// Return Product Name, Price, & Qty
echo $product->getProductName().PHP_EOL;
echo $product->getProductPrice().PHP_EOL;
echo $product->getQty().PHP_EOL;

// Create New Instance of Extension
$shoes = new Shoes(2);
$shoes->setBrand('Nike');

// Return Brand
echo $shoes->getBrand();

