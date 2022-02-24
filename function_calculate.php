<?php

include_once './products.php';
include_once './helper.php';

$array_item_price = [];

    if (isset($products)) {
        foreach ($products as $item) {
            echo $item->price . '<br>';
            $array_item_price[] = getPrice($item);
        }
    }

print_r(array_reduce($array_item_price, function ($total, $price) {
    $total += $price;
    return $total;
}, 0));