<?php

namespace Homework;

class Shoe extends Product{
    protected $laceColor;

    public function getLaceColor(){
        return $this->laceColor;
    }

    public function setLaceColor($laceColor){
        $this->laceColor = $laceColor;
    }
}
