<?php declare(strict_types=1);

// клас продукту
class Product{

    public function __construct(public int $code,public float $price)
    {
    }
    public function __toString():string
    {
       return "Price is ".$this->price;
    }
}

// ф-ція для виводу
function console(Product $productObject): void
{
    echo $productObject;
}

//створити об'єкт
$product1 = new Product(14741, 255.5);
$product2 = new Product(14747, 325.7);


console($product2);