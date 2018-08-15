<?php
namespace Homework;

class Car extends Vehicle{

    protected $steeringwheel;

    public function getSteeringwheel(){
        return $this->$steeringwheel;
    }

    public function setSteeringwheel(float $steeringwheel){
        $this->steeringwheel = $steeringwheel;
    }

    // You have to set method here becuase superclass is an abstract class
    public function getColor(){
        return $this->$color;
    }

}
