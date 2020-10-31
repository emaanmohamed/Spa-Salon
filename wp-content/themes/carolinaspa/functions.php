<?php

function products_per_page($products)
{
    $products = 3;
    return $products;
}

add_filter('loop_shop_per_page', 'products_per_page', 20);