<?php

class Calculate
{
    public array $prices;
    public float $sum;

    function __construct(array $products)
    {
        $this->extractPrice($products);
        $this->total();
    }

    private function extractPrice($products)
    {
        if (isset($products)) {
            foreach ($products as $product) {
                $price = $product->price;
                if ($product->type === "fruit") {
                    $after_discount = $price - ($price * 0.6);
                } else {
                    $after_discount = $price - ($price * 0.21);
                }
                $this->prices[] = $after_discount;
            }
        }
    }

    private function total()
    {
        $this->sum = array_reduce($this->prices, function ($total, $price) {
            $total += $price;
            return $total;
        }, 0);
    }


}



