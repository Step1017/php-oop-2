<?php

require_once __DIR__.'/Product.php';

//estendo la classe Product
class Game extends Product {

    //aggiunta di una proprietà
    public $material;
    
    //inserisco tutto nel costruttore (compreso la nuova proprietà)
    function __construct(
        string $name,
        string $description,
        float $price,
        string $img,
        int $quantity,
        Category $category,
        string $material
    )
    {
        //tramite la parola chiave 'parent' mi vado a richiamare la logica del costruttore della superclasse Product
        parent::__construct(
            $name,
            $description,
            $price,
            $img,
            $quantity,
            $category
        );

        //infine vado a settare l'unico attributo che differisce dalla classe Product
        $this->material = $material;
    }
}
