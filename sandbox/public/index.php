<?php
define('BASE', realpath(__DIR__));

spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require BASE . '/' . $file;
    }
);

// "use" to import subclasses
use Homework\Shoe;
use Homework\Car;


// Create New Instance of Extension
$shoe1 = new Shoe(2);
$shoe1->setProductName('Shoes');
$shoe1->setProductPrice(100.00);
$shoe1->setQty(1);
$shoe1->setLaceColor('Pink');
$shoe1->getProductName();
$shoe1->getProductPrice();
$shoe1->getQty();


var_dump($shoe1);


// Example 1 for Abstract super class
$car = new Car(1);
$car->setColor('blue');

var_dump($car);
