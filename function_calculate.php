<?php

include_once './products.php';

$array_item_price = [];
    if (isset($products)) {
        foreach ($products as $item) {
            echo $item->price . '<br>';
            $price = $item->price;
            if ($item->type === "fruit") {
                $after_discount = $price - ($price * 0.6);
            } else {
                $after_discount = $price - ($price * 0.21);
            }
            $array_item_price[] = $after_discount;
        }
    }


print_r(array_reduce($array_item_price, function ($total, $price) {
    $total += $price;
    return $total;
}, 0));