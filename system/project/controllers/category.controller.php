<?php

//get category ID from URL
$category_id = request::get('id');

//retreive categoty object from database
$category = Category_Model::retreiveById($category_id);

$navigation = new view('navigation');

//category information
$info = new view('category/info');
$info->category = $category;

//top products from category
$top_products = new view('category/top_products');
$top_products->category_product = Category_Model::getProductfromCategory($category_id);
$top_products->all_products = Product_Model::getTopProducts();

//something else
$categories = new view('home/categories');
$categories->categories = Category_Model::getSubCategories($category_id);

$page_layout =  new view('category/page_layout');
$page_layout->info = $info;
$page_layout->top_products = $top_products;
$page_layout->categories = $categories;

presenter::setTitle('Category');

presenter::present($page_layout);