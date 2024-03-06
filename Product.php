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

