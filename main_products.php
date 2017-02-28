<?php
    $products = [
        (object)[
            'name' => 'Lenovo ThinkPad Yoga 260',
            'price' => '3690 &euro;',
            'image' => 'http://product-images.www8-hp.com/digmedialib/prodimg/lowres/c05155813.png'
        ],
        (object)[
            'name' => 'Apple MacBook Air 13"',
            'price' => '200 &euro;',
            'image' => 'http://product-images.www8-hp.com/digmedialib/prodimg/lowres/c05155813.png'
        ],
        (object)[
            'name' => 'HP ProDesk 600 G1 Tower',
            'price' => '2323 &euro;',
            'image' => 'http://product-images.www8-hp.com/digmedialib/prodimg/lowres/c05155813.png'
        ],
        (object)[
            'name' => 'Office Mini i3 W10 Pro',
            'price' => '1230 &euro;',
            'image' => 'http://product-images.www8-hp.com/digmedialib/prodimg/lowres/c05155813.png'
        ],
        (object)[
            'name' => 'Apple iPhone 6s - 6sg',
            'price' => '523 &euro;',
            'image' => 'http://product-images.www8-hp.com/digmedialib/prodimg/lowres/c05155813.png'
        ]
    ];
    if(isset($_POST['id']) && $_POST['id'] >= 0 && $_POST['id'] < count($products)) {
        $product = $products[$_POST['id']];
        $count = count($products);
        $response = [
            'product' => $product,
            'count' => $count
        ];
        echo json_encode($response);
    }