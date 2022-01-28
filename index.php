<?php 
    require_once __DIR__ . './User.php';
    require_once __DIR__ . './VideoEditor.php';
    require_once __DIR__ . './Videogame.php';


    // User log in 
    $giorgio = new User('Giorgio', 'Rossi', 15, 'giorgio@mail.it');

    // User finds Prodcuts 
    $da_vinci_resolve = new VideoEditor('Da Vinci Resolve', 300);
    $da_vinci_resolve->version = '17.0.0';
    $pokemon_platino = new Videogame('Pokemon Platino', 60, ['Nintendo DS']);

    // Adding products to cart 
    $giorgio->addToCart($da_vinci_resolve);
    $giorgio->addToCart($pokemon_platino);

    // Getting cart and sum of price
    $cart_price_sum = $giorgio->getTotalPrice();
    $cart = $giorgio->getCart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'il carrello di ' . $giorgio->getFullName() . ' :'; ?></h1>

    <!-- Stampo ogni prodotto  -->
    <?php foreach($cart as $product) { ?>
        <div class="product">
            <h2><?php echo $product->name ?></h2>
            <div class="price"><?php echo $product->price ?></div>
        </div>
    <?php } ?>

    <hr>

    <div>Totale: <?php echo $cart_price_sum ?></div>

</body>
</html>