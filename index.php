<?php
    //importazione di tutte le classi che utilizzo
    require_once __DIR__.'/Models/Category.php';
    require_once __DIR__.'/Models/Product.php';
    require_once __DIR__.'/Models/Food.php';
    require_once __DIR__.'/Models/Game.php';
    require_once __DIR__.'/Models/Kennel.php';

    //istanziazione delle cateogrie
    $dogsCategory = new Category(
        'Cani',
        ':dog:'
    );
    $catsCategory = new Category(
        'Gatti',
        'https://google.com'
    );

    var_dump($dogsCategory);
    var_dump($catsCategory);

    //creo array di prodotti
    $products = [];

    //e vado a pushare i singoli prodotti che generiamo
    //prodotto generico
    $products[] = new Product (
        'Prodotto 1',
        9,99,
        'https://google.com',
        12,
        $dogsCategory
    );

    //prodotto generico
    $products[] = new Product (
        'Prodotto 2',
        9,99,
        'https://google.com',
        12,
        $catsCategory
    );

    //prodotto specifico (cibo)
    $products[] = new Food (
        'Cibo 1',
        9,99,
        'https://google.com',
        10,
        $dogsCategory,
        '07/07/2024'
    );

    //prodotto specifico (gioco)
    $products[] = new Game (
        'Game 1',
        15,00,
        'https://google.com',
        25,
        $catsCategory,
        'Gomma'
    );

    //prodotto specifico (cuccia)
    $products[] = new Kennel (
        'Kennel 1',
        55,90,
        'https://google.com',
        25,
        $dogsCategory,
        'Large'
    );

    var_dump($products);
?>

