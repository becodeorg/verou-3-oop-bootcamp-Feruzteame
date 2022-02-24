<?php

if (! function_exists('getPrice')) {
    function getPrice($item){
        $price = $item->price;
        if ($item->type === "fruit") {
            $tax = $price * 0.06;
            $discount = $price * 0.5;
            $price = $price + $tax - $discount;

        } else {
            $tax = $price * 0.21;
            $price = $price + $tax;
        }
        return $price;
    }
}