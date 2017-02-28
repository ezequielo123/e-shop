<?php
$unique_id = request::get('id');

//products showcase
$selected_product = new view('product/product');
$selected_product->product = Products_Model::getProduct($unique_id);

//categories
$categories = new view('home/categories');
$categories->categories = Category_Model::getTopCategories();

//page
$page_layout = new view('product/page_layout');
$page_layout->selected_product = $selected_product;
$page_layout->categories = $categories;


//sets the title of the page
presenter::setTitle('Product');

//give the layout to the presenter
presenter::present($page_layout);
