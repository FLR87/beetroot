<?php

abstract class ShopProduct {
    protected $name;
    protected $author;
    protected $type;
    protected $price;
    protected $discount;

    public function __construct($name,$author,$type,$price,$discount){
        $this->name = $name;
        $this->author = $author;
        $this->type = $type;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getInformation(){
        return "name:". $this->name . "</br> author:". $this->author ."</br> type:". $this->type. "</br>"
        ."</br> price:". $this->price."</br> discount:". $this->discount;
    }
    public function setBrand($brand){
        return $this->brand = $brand;
    }

}
class BookProduct extends  ShopProduct {

    private $publishing;

    public function __construct($name,$author,$type,$price,$discount,$publishing){
        parent::__construct($name,$author,$type,$price,$discount);
        $this->publishing = $publishing;
    }

    public function getInformation(){
        $result = parent::getInformation();
        return "Характеристики книги:</br>" . $result . "Издатель:". $this->publishing;
    }
    public  function  getPrice()
    {
        $result = ($this->price/100)*$this->discount;
        return "Discounted price:</br>" . $result;
    }

}


class CdProduct extends  ShopProduct {

    private $case;

    public function __construct($name,$author,$type,$price,$discount,$case){
        parent::__construct($name,$author,$type,$price,$discount);
        $this->case = $case;
    }

    public function getInformation(){
        $result = parent::getInformation();
        return "Характеристики СД носителя:</br>" . $result . "Тип издания:". $this->case;
    }
    public  function  getPrice()
    {
        $result = ($this->price/100)*$this->discount;
        return "Discounted price:</br>" . $result;
    }

}
$goods = [];

$goods[] = new BookProduct('LOTR','J.R.R.Tolkien','epic mfaka',100500, 10, 'red zorka');
$goods[] = new BookProduct('Game of thrones','Martin','kinda epic',500, 25, 'kopat-kolotit');

$goods[] = new CdProduct('Director cutLOTR','J.R.R.Tolkien','epic mfaka',100, 20, 'DVD');
$goods[] = new CdProduct('Spoiler edition Game of thrones','Martin','kinda epic',200, 30, 'Torretn edition');

foreach ($goods as $object){
    showObjectInformation($object);
}

function showObjectInformation(ShopProduct $object){
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
