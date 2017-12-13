<?php

class Car {
    public $brand = 'BMW';
    public $speed = '100';
    public $color = 'red';
    public $fuel = 15;

    function __construct($brand,$speed,$color,$fuel){
        $this->brand = $brand;
        $this->speed = $speed;
        $this->color = $color;
        $this->fuel = $fuel;
    }

    public function getBrand(){
        return $this->brand;
    }
    public function setBrand($brand){
        return $this->brand = $brand;
    }

}

$carOneObject = new Car('AUDI','300','black',20);
echo $carOneObject->Brand;

//$carTwoObject = new Car('MERS','200','blue',10);


echo '<pre>';
var_dump($carOneObject);
echo '</pre>';


?>