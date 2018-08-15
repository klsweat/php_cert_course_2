<?php
/**
 * Created by PhpStorm.
 * User: ksweat
 * Date: 8/14/2018
 * Time: 1:43 PM
 */


class Product{
    protected $id;
    protected $productName;
    protected $productPrice;
    protected $qty;

    public function __construct($id, $productName, $productPrice)
    {
        print "In constructor\n";
        $this->id = $id;
        $this->productName = $productName;
        $this->productPrice = $productPrice;
    }

    // Magic Method 1
    function __destruct() {
        print "Destroying " . $this->id . "\n";
    }

    // Magic Method 2
    public function __sleep()
    {
        return['id','productName', 'productPrice'];
    }

    // Magic Method 3
    public function __wakeup()
    {
        return['id','productName', 'productPrice'];
    }

    // magic method 4
    public function __get($arg){
        return "Attempted to retrieve $arg and failed...\n";
    }

}


$product1 = new Product(1, 'Shoes', 100);

// Sleep
$foo = serialize($product1);
// wakeup
$foo2 = unserialize($foo);

// __get
$foo3 = $product1->brand;

$foo4 = $product1->brand = "Nike";

echo $foo.PHP_EOL;
var_dump($foo2).PHP_EOL;
echo $foo3.PHP_EOL;
echo $foo4.PHP_EOL;

