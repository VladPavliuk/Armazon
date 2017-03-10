<?php

return [

    // Main page.
    'GET:' => 'main/index:main',

    // Leonardo profile page
    'GET:(leonardo)' => 'main/profilePage/$1:main',

    // Frodo profile page
    'GET:(frodo)' => 'main/profilePage/$1:main',

    // Cart page.
    'GET:cart' => 'cart/index:main,cart',

    // About page.
    'GET:about' => 'main/about:main',

    // Confirm order.
    'GET:confirm-order' => 'cart/confirm:main,cart',

    // Do order
    'POST:send' => 'email/index:main,email',

    //> Cart interact.
    'GET:cart-add/([a-zA-z]+)/([a-zA-z0-9]+)/([a-zA-z]+)/([0-9]+)' => 'cart/setCart/$1/$2/$3/$4:main,cart',
    'GET:frame-get-price/([a-zA-z]+)/([a-zA-z0-9]+)' => 'cart/getFramePrice/$1/$2:main,cart',
    'GET:get-count' => 'cart/getTotalCount:main,cart',
    'GET:get-price' => 'cart/getTotalPrice:main,cart',
    'GET:get-cart' => 'cart/getCart:main,cart',
    //<
];