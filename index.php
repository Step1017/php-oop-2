<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    //importazione di tutte le classi che utilizzo
    require_once __DIR__.'/Models/Category.php';
    require_once __DIR__.'/Models/Product.php';
    require_once __DIR__.'/Models/Food.php';
    require_once __DIR__.'/Models/Game.php';
    require_once __DIR__.'/Models/Kennel.php';

    //istanziazione delle cateogrie
    $dogsCategory = new Category (
        'Cani',
        '🐶'
    );
    $catsCategory = new Category (
        'Gatti',
        '🐱'
    );

    // var_dump($dogsCategory);
    // var_dump($catsCategory);

    //creo array di prodotti
    $products = [];

    //e vado a pushare i singoli prodotti che generiamo
    //prodotto generico
    $products[] = new Product (
        'Prodotto 1',
        29.99,
        'https://m.media-amazon.com/images/I/81Gm9vrfoRL._AC_SX679_.jpg',
        5,
        $dogsCategory
    );

    //prodotto generico
    $products[] = new Product (
        'Prodotto 2',
        19.99,
        'https://cdn.shopify.com/s/files/1/1826/7385/products/cg_mint_900x.jpg?v=1667405784',
        12,
        $catsCategory
    );

    //prodotto specifico (cibo)
    $products[] = new Food (
        'Cibo 1',
        49.99,
        'https://arcaplanet.vtexassets.com/arquivos/ids/255544/monge-adult-medium-pollo-12kg-600x600.jpg?v=1765124395',
        10,
        $dogsCategory,
        '07/07/2024'
    );

    //prodotto specifico (gioco)
    $products[] = new Game (
        'Game 1',
        25.00,
        'https://www.beselettronica.com/userfiles/gioco-gatti-torre-palline-interattivo.jpg',
        5,
        $catsCategory,
        'Gomma'
    );

    //prodotto specifico (cuccia)
    $products[] = new Kennel (
        'Kennel 1',
        105.90,
        'https://m.media-amazon.com/images/I/81pcjpygmzL._AC_SX522_.jpg',
        25,
        $dogsCategory,
        'Large'
    );

    // var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Shop ZooBools</title>
    </head>
    <body>
        <header>

        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            Shop ZooBools
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <!-- uso foreach per stampare i prodotti in pagina -->
                    <?php
                        foreach ($products as $index => $product) {
                    ?>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo $product->img; ?>" class="card-img-top w-50" alt="<?php echo $product->img; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->name; ?></h5>
                                <h6>
                                    <?php echo $product->category->icon; ?>
                                    <?php echo $product->category->name; ?>
                                </h6>
                                <div class="mb-3">
                                    € <?php echo number_format($product->price, 2, ',','.'); ?>
                                </div>
                                <?php
                                    if (is_a($product, 'Food')) {
                                ?>

                                <div class="mb-3">
                                    Scadenza: <?php echo $product->expire; ?>
                                </div>

                                <?php
                                    }
                                ?>
                                <a href="" class="btn btn-primary">Vai al prodotto</a>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                </div>
            </div>
        </main>

        <footer>

        </footer>
    </body>
</html>