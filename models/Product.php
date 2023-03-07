<?php
require_once __DIR__.'/Category.php';
class Product {
    public $name; 
    public $price;
    public $img;
    public $quantity;
    public $category;

    function __construct(string $name, float $price, string $img, int $quantity, Category $category) //creo una dipendenza tra la classe Category e la classe Product
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->quantity = $quantity;
        $this->category = $category;
    }
}
?>