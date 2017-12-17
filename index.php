<?php

interface ITransport {
    public function getPrice();
}

abstract class Transport implements  ITransport{
    protected $brand;
    protected $speed;
    protected $color;

    public function __construct($brand,$speed,$color){
        $this->brand = $brand;
        $this->speed = $speed;
        $this->color = $color;
    }

    public function getInformation(){
        return "brand:". $this->brand . "</br> speed:". $this->speed ."</br> color:". $this->color. "</br>";
    }
    public function setBrand($brand){
        return $this->brand = $brand;
    }

}
class Car extends  Transport {

    private $fuel;

    public function __construct($brand,$speed,$color,$fuel){
        parent::__construct($brand,$speed,$color);
        $this->fuel = $fuel;
    }

    public function getInformation(){
        $result = parent::getInformation();
       return "Характеристики велосипеда:</br>" . $result . "Fuel:". $this->fuel;
    }
    public  function  getPrice()
    {
        // TODO: Implement getPrice() method.
    }

}


class Bicycle extends Transport {
    private  $type;

    public function __construct($brand, $speed, $color, $type)
    {
        parent::__construct($brand, $speed, $color);
        $this->type = $type;
    }

    public  function  getInformation()
    {
       $result = parent::getInformation();
        return "Характеристики велосипеда:</br>" . $result. "Type:" . $this->type;
    }
    public  function  getPrice()
    {
        // TODO: Implement getPrice() method.
    }
}
$transportCollection = [];

$transportCollection[] = new Car('AUDI','300','black',20);
$transportCollection[] = new Car('BMW','250','green',25);

$transportCollection[] = new Bicycle("Oscar",30, 'red','Детский велосипед');
$transportCollection[] = new Bicycle("Oscar2",35, 'blue','Взрослый велосипед');

foreach ($transportCollection as $object){
    showObjectInformation($object);
}

function showObjectInformation(Transport $object){
    echo "<p>".$object->getInformation()."</p>";
}

//echo '<pre>';
//print_r($transportCollection);
//echo '</pre>';

//echo "<p>".$bikeOneObject->getInformation(). "</p>";

//echo '<pre>';
//print_r ($carOneObject);
//echo '</pre>';


//var_dump ($carOneObject);

//$carTwoObject = new Car('MERS','200','blue',10);


//echo '<pre>';
//var_dump($carOneObject);
//echo '</pre>';


?>