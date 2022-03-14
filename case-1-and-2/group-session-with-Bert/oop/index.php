<?php

include_once '../products.php';
include_once 'Calculate.php';
include_once '../helper.php';
include_once 'Product.php';

$apples = new Product(1.5, 'apple', 0.06, 2);

$basket = [
    new Product(1.5, 'apple', 0.06, 2),
    new Product(1, 'banana', 0.06, 6),
    new Product(10, 'wine', 0.21, 1),
];

foreach ($basket as $product) {
    echo $product->totalPrice();
}