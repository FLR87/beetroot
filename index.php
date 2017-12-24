<?php

class shopProduct{
    protected $name;
    protected $izdat;
    protected $author;
    protected $type;
    protected $bookName;
    protected $countPages;
    protected $typeDisk;
    protected $price;
    //protected $discount;
    protected $class;


    public function __construct($name, $owner, $type, $price)
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->type = $type;
        $this->price = $price;
    }
    public function getInformation (){
        return "Название магазана: " . $this->name . "<br>\n" .
            "Издатель: " . $this->owner . "<br>\n" .
            "Тип магазина: " . $this->type . "<br>\n" .
            "Цена: "  . $this->price . "<br>\n";
    }
    public function priceWithDiscount(){
        $result = $this->price - ($this->price * $this->discount / 100) ;
        return "Стоимость товара со скидкой: " . $result;
    }

}
class BookProduct extends shopProduct{
    private $countBook;
    public $discount;
    public function __construct($name, $owner, $type, $price, $countBook, $discount)
    {
        parent::__construct($name, $owner, $type, $price);
        $this->countBook = $countBook;
        $this->discount = $discount;
    }

    public function getInformation()
    {
        $result = parent::getInformation();
        return $result . "Колличество страниц в книге: " . $this->countBook . "<br>\n" .
            'Скидка: ' . $this->discount . '%' . "<br>\n";
    }
}
class CdProduct extends shopProduct{
    private $typeCD;
    public $discount;
    public function __construct($name, $owner, $type, $price, $typeCD, $discount)
    {
        parent::__construct($name, $owner, $type, $price);
        $this->typeCD = $typeCD;
        $this->discount = $discount;
    }
    public function getInformation()
    {
        $result = parent::getInformation();
        return $result . "Тип диска: " . $this->typeCD. "<br>\n" .
            'Скидка: ' . $this->discount . '%' . "<br>\n";
    }

}
abstract class shopProductWrite{
    private $product;

    public function addProducts(shopProduct $object){
        $this->product = $object;
    }
    public function getProductInfo(){
        return $this->product->getInformation();
    }
    public function wrrite(){

    }
//    public function write(shopProduct $shopProduct){
//        file_put_contents('data.txt', '');
//        file_put_contents('data.xml', '');
//        $res = $shopProduct->getInformation();
//        $res .= $shopProduct->priceWithDiscount();
//        $data = file_put_contents('data.txt', $res, FILE_APPEND);
//        $data .= file_put_contents('data.xml', $res, FILE_APPEND);
//        return $data;
//    }
}
class TextWriter extends shopProductWrite{
    public function wrrite()
    {
        $productInfo = $this->getProductInfo();

    }
}
class XmlWrite extends shopProductWrite{
    public function wrrite()
    {

    }
}



$book = new BookProduct ('Книжка', 'Пушкин А.С.', 'Книжный магазин', '230', '650', '5');

$txtObject = new TextWriter();
$txtObject->addProducts($book);
$txtObject->wrrite();


$CD = new CdProduct('Цифра', '1C', 'Магазин по продаже дисков', '1500', 'DVD', '2');


echo $book->getInformation();
echo '<br>' . $book->priceWithDiscount();
echo '<hr>';
echo $CD->getInformation();
echo '<br>' . $CD->priceWithDiscount();
$write1->write($book);
$write2->write($CD);




?>