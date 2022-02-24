<?php

include_once './products.php';


   class Calculate{
          public array $item_price;

     function __construct( $array_item_price) {
        $this->item_price = $array_item_price;
       }

    function discount($products){
        if (isset($products)) {
            foreach ($products as $item) {
                echo $item->price . '<br>';
                $price = $item->price;
                if ($item->type === "fruit") {
                    $after_discount = $price - ($price * 0.6);
                } else {
                    $after_discount = $price - ($price * 0.21);
                }
               $this->item_price = $after_discount;
            }
         }
    }
    function sum(){
        print_r(array_reduce($this->item_price, function ($total, $price) {
            $total += $price;
            return $total;
        }, 0));
    }
}

if (isset($products)) {
    $result = new Calculate($products);
   echo $result-> sum;

}


