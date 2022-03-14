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
                $this->prices[] = getPrice($product);
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



