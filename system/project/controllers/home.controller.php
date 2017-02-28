<?php

//list of top products
$top_products = new view('home/top_products');
$top_products->products = Product_Model::getTopProducts();


//list of categories
$categories = new view('home/categories');
$categories->categories = Category_Model::getTopCategories();


//shop information
$info = new view('home/info');
$info->order_id = 42;

//page
$page_layout = new view('home/page_layout');
$page_layout->top_products = $top_products;
$page_layout->categories = $categories;
$page_layout->info = $info;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);