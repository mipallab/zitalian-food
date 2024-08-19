<?php

// Process each menu category
$foods_menus = array_map(function ($menu) {

    // Check for and correct the typo in 'raging' key
    $items = $menu['items'];

    // Extract ratings
    $ratings = array_column($items, 'rating');
    // Sort items by rating in descending order
    array_multisort($ratings, SORT_DESC, $items);

    // Get the top 3 items
    $menu['items'] = array_slice($items, 0, 3);

    return $menu;
}, $foods_menu);
