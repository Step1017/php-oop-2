<?php
require_once __DIR__.'/Category.php';
require_once __DIR__.'../Traits/NameDescr.php';
class Product {
    use NameDesc;
    public $price;
    public $img;
    public $quantity;
    public $category;

    function __construct(string $name, string $description, float $price, string $img, int $quantity, Category $category) //creo una dipendenza tra la classe Category e la classe Product
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->img = $img;
        $this->quantity = $quantity;
        $this->category = $category;

        if($price >= 0) {
            $this->price = $price;
        } else {
            throw new Exception('Non é possibile inserire un prezzo negativo');
        }
    }
}
