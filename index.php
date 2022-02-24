<?php

include_once 'products.php';
include_once 'Calculate.php';


if (isset($products)) {
    $calculate = new Calculate($products);
    echo $calculate->sum;
}