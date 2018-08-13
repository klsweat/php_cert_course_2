<?php

/*
 * Domain Entity needs to be identified
 */
//model a user with what ever properties it needs
// classes model something
// we are modeling people above
// you can model a stapler
// you can model a vehicle
// -> is like . in JS when setting the object.

//namespace User;

class User1
{
    public const TABLE = 'user';
    protected $firstname;
    protected $lastname;
    protected $id;

    public function setFirstName ($firstname) {
        // $this refers to current object value ex. $zach->setFirstName $this is $zach.
        return $this->firstname = $firstname;
    }

    public function getFirstName () {
        return $this->firstname;
    }

    public function getLastName (){
        return $this->lastname;
    }

    public function setLastName ($lastname) {
        // $this refers to current object value ex. $zach->setFirstName $this is $zach.
        return $this->lastname = $lastname;
    }

    public function getFullName () {
        return trim(($this->firstname . ' ' ?? '') . ($this->lastname ?? ''));
    }

}

// Access the constant table
echo User1::TABLE;
























class User
{
    public const TABLE = 'user';
    protected $firstname;
    protected $lastname;
    protected $id;

    public function setFirstName ($firstname) {
        // $this refers to current object value ex. $zach->setFirstName $this is $zach.
        return $this->firstname = $firstname;
    }

    // fluent setter
    public function setFirstNameFluent ($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    // fluent setter
    public function setLastNameFluent ($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function getFirstName () {
        return $this->firstname;
    }

    public function getLastName (){
        return $this->lastname;
    }

    public function getFullName () {
        return trim(($this->firstname . ' ' ?? '') . ($this->lastname ?? ''));
    }

}

// Access the constant table
echo User::TABLE;

// two instances of the object class
// create a new instance that create a new object called $zach or $james
// instantiate or create an object
// object and instances are the same thing
$zach = new User;
$james = new User;

// model unique instances
// use when visibility is set to protected
// capitalization does not matter with METHODS.. FUNCTION NAMES
// flushing out the object with unique values
$zach->setFirstName('Zach');
$zach->setLastName('Jones');
$james->setFirstName('James');


// Use when properties are public
$zach->firstname('Zach');
$james->firstname('James');

// $this refers to current object value ex. $zach->setFirstName $this is $zach.
// model a user with what ever properties it needs
// methods are public in the global scope


// Chaining
// fluenent setter
$zach->setFirstNameFluent('Zach')->setLastNameFluent('Smith');





// set properties not defined in the class
$car->make = 'BMW';
echo $car->make;


//assign values through constructor
//creating an instance property at the point of instating process
// you need setters to change arguments
// __construct is a magic method / constructor.. its called automatically and triggered by something else. its called and
// executed by the keyword
$car = new Vehicle('red', 'sedan');

// want to change color
$car->setColor('blue');

public function __construct($color, $type)
{
    $this->color = $color;
    $this->type = $type;
}

var_dump($car);

// car can't exist with out having the parameters
// construct have required dependencies...
// a hard dependency .. passing the hard dependencies of color and type.. its hard because we can't instanticate the object
// w/o passing the params
// dependency are the strings that have to be passed into the constructor
// Soft Dependency:  -> setter is used for
// hard dependency: -> constructor

public function __construct($id)
{
   $this->id = $id;
}

$car = new Vehicle(1);
$car->setColor('red')->setType('sedan');
// now color and type are soft dependencies

/*
 * Dependency Injection:
 * constructor Injection:
 * injecting it as a parameter as a hard dependency
*/

/*
  * magic methods: implicitly called
*/