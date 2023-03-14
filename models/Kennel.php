<?php

    require_once __DIR__.'/Product.php';

    //estendo la classe Product 
    class Kennel extends Product {

        //aggiunta di una proprietà
        public $size;

        //inserisco tutto nel costruttore (compreso la nuova proprietà)
        function __construct(
            string $name,
            float $price,
            string $img,
            int $quantity,
            Category $category,
            string $size
        )
        {
            //tramite la parola chiave 'parent' mi vado a richiamare la logica del costruttore della superclasse Product
            parent::__construct(
                $name,
                $price,
                $img,
                $quantity,
                $category
            );

            //infine vado a settare l'unico attributo che differisce dalla classe Product
            $this->size = $size;
        }
    }

