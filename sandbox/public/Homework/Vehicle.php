<?php
namespace Homework;

abstract class Vehicle {
    protected $color;
    protected $type;
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public abstract function getColor();

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