<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Shop Information
    |--------------------------------------------------------------------------
    |
    | This file contains all the shop-related configuration values that are
    | used throughout the application. These values are loaded from the
    | environment file (.env) and can be easily updated without changing code.
    |
    */

    'name' => env('SHOP_NAME', 'Harees Jewellery'),
    
    'contact' => [
        'email' => env('SHOP_EMAIL', 'info@hareesjewellery.com'),
        'phone' => env('SHOP_PHONE', '+91 1234567890'),
        'phone_alt' => env('SHOP_PHONE_ALT', '+91 0987654321'),
    ],

    'address' => [
        'line1' => env('SHOP_ADDRESS_LINE1', 'Harees Jewellery'),
        'line2' => env('SHOP_ADDRESS_LINE2', 'Main Road'),
        'city' => env('SHOP_CITY', 'Kollam'),
        'state' => env('SHOP_STATE', 'Kerala'),
        'pincode' => env('SHOP_PINCODE', '691001'),
        'country' => env('SHOP_COUNTRY', 'India'),
    ],

    'hours' => [
        'weekday' => env('SHOP_HOURS_WEEKDAY', '10:00 AM - 8:00 PM'),
        'sunday' => env('SHOP_HOURS_SUNDAY', '10:00 AM - 6:00 PM'),
    ],

    'social' => [
        'facebook' => env('SHOP_FACEBOOK', 'https://facebook.com/hareesjewellery'),
        'instagram' => env('SHOP_INSTAGRAM', 'https://instagram.com/hareesjewellery'),
        'twitter' => env('SHOP_TWITTER', 'https://twitter.com/hareesjewellery'),
        'youtube' => env('SHOP_YOUTUBE', 'https://youtube.com/@hareesjewellery'),
    ],

    'gold_rates' => [
        '22k' => env('GOLD_RATE_22K', 7500),
        '24k' => env('GOLD_RATE_24K', 9100),
    ],

];
