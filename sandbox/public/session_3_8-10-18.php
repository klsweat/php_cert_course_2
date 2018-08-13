<?php
/*
* Anonymous Classes
* Fake PDO anonymous class allows you to call the function w/o an actual PDO database connection
*
*/

// we see if this function works
function findById(PDO $pdo, $id)
{
$pdo->prepare('SELECT name FROM customers WHERE id = ?');
$stmt = $pdo->execute([$id]);
return $stmt->fetch();
}

// we create a fake PDO class
$fakePDO = new class() extends PDO {
public function __construct() {}
public function prepare($stmt, $options = NULL) {}
public function execute($id)
{
return new class () extends PDOStatement {
public function fetch($a = NULL, $b = NULL, $c = NULL)
{
return ['name' => 'Fred Flintstone'];
}
};
}
};

// now we call the function
var_dump(findById($fakePDO, 1));


/*
 * Class / Object Inheritance
 * inheritable properties are those with public or protected visibilities
 * Super cl
 *
 */



class Vehicle {
    protected $color;
    protected $type;
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getColor(){
        return $this->$color;
    }

    public function getType(){
        return $this->$type;
    }

    public function setColor($color){
        $this->color = $color;
        return $color;
    }

    public function setType($type){
        $this->type = $type;
        return $this;
    }
}


class Car extends Vehicle{

    protected $steeringwheel;

    public function getSteeringwheel(){
      return $this->$steeringwheel;
    }

    public function setSteeringwheel(float $steeringwheel){
        $this->steeringwheel = $steeringwheel;
    }

}

class Truck extends Vehicle{
    protected $steeringwheel;
    protected $bedlength;

    public function getSteeringwheel(){
        return $this->$steeringwheel;
    }

    public function setSteeringwheel(float $steeringwheel){
        $this->steeringwheel = $steeringwheel;
        return $this;
    }

    public function getBedlength(){
        return $this->$bedlength;
    }

    public function setBedlength($bedlength){
        $this->bedlength = $bedlength;
        return $this;
    }

}

// instantiate a car
$car = new Car(1);

$car->setColor('red');
echo $car->getColor();

$car->setSteeringwheel(20);
echo $car->getSteeringwheel();


/*
 * When you instantiate a sub-class a the parent class constructor is ignored if you don't define the parent
 * ex. parent ::__construct($firstname, $lastname);
 * you have to load classes before you extend them.
 * Normally each class is in its on file.
 *
 * Final Declaration public final... subclass can't override parent
 *
 * Explaining the Services method
 * Controller are specific to the domain and what its modeling
 * controller receives request it interfaces the databases provided by models and it sets up the views for represntation
 * html
 */


class UserA
{
    protected $id;
    protected $fname;
    protected $lname;
    public function __construct($id = 0, $fname = '', $lname = '')
    {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
    }
    public function __sleep()
    {
        return[$this->fname, $this->lname];
    }

    public function __get($arg){
        return $this->$arg;
    }

    public function __set($something, $value){
         $this->something = $value;
    }
}

$user = new UserA(1, 'Fred', 'Flintstone');
$foo = serialize($user);
echo $foo; // echos doing something

// serialize() triggers the sleep magic constant, prior to the string being made
// Wake up magic constant... unserialize triggers the __wakeup method, prior to it turning back into the object

// re state the object or array
var_dump(unserialize($foo));
// __sleep happens when we serialize and object
//


// the __set magic const. now has a property age that didn't exist before.
$user->age = 25;

// hydrating an empty object with data
