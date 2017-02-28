<?php

//products showcase
$showcase = new view('products/showcase');
$showcase->products = Product_Model::getProducts();


//categories
$categories = new view('home/categories');
$categories->categories = Category_Model::getTopCategories();

//page
$page_layout = new view('products/page_layout');
$page_layout->showcase = $showcase;
$page_layout->categories = $categories;


//sets the title of the page
presenter::setTitle('Products');

//give the layout to the presenter
presenter::present($page_layout);
