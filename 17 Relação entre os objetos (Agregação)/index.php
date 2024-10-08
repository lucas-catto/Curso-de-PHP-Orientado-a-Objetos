<?php

function show($line) {
    echo "<p>".$line."</p>";
}

class Product
{
    public $name;
    public $value;

    function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}

class Shop
{
    public $products;

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function show()
    {
        foreach ($this->products as $product)
        {
            show($product->name);
            show($product->value);
        }
    }
}

$product0 = new Product("Notebook", 1200);
$product1 = new Product("Headphone", 86);

$shop = new Shop;

$shop->add($product0);
$shop->add($product1);

$shop->show();
