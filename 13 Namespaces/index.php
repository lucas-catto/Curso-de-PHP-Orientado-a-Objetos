<?php

function show($line) {
    echo "<p>".$line."</p>";
}

// require 'Classes/Product.php';
// require 'Models/Product.php';

// use Classes\Product;

// $product = new \Classes\Product;
// show($product->showDetails());
// var_dump($product);

// $product = new \Models\Product;
// show($product->showDetails());

/*
require 'Classes/Product.php';

use Classes\Product;

$product = new Product;
show($product->showDetails());
*/

require 'Models/Product.php';

use Models\Product as ProductModel;

$product = new ProductModel;
show($product->showDetails());
