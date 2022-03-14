<?php

class Product
{
    public float $price;
    public string $name;
    public float $tax;
    public int $amount;

    public function __construct(float $price, string $name, float $tax, int $amount)
    {
        $this->price = $price;
        $this->name = $name;
        $this->tax = $tax;
        $this->amount = $amount;
    }

    public function totalPrice() : float
    {
        return $this->price * $this->amount;
    }
}