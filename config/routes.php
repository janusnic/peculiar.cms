<?php

$router->get('', 'IndexController@index');
$router->get('posts', 'PostsController@index');
$router->get('post/{id}', 'PostsController@view');
$router->get('admin', 'AdminProductController@index');

$router->get('admin/products', 'AdminProductController@list');

$router->get('admin/products/add', 'AdminProductController@add');
$router->post('admin/products/add', 'AdminProductController@add');

$router->get('admin/products/edit/{id}', 'AdminProductController@edit');
$router->post('admin/products/edit/{id}', 'AdminProductController@edit');

$router->get('admin/products/delete/{id}', 'AdminProductController@delete');
$router->post('admin/products/delete/{id}', 'AdminProductController@delete');


$router->get('admin/categories', 'AdminCategoryController@index');
$router->get('admin/category/add', 'AdminCategoryController@add');
$router->post('admin/category/add', 'AdminCategoryController@add');

$router->get('admin/category/edit/{id}', 'AdminCategoryController@edit');
$router->post('admin/category/edit/{id}', 'AdminCategoryController@edit');

$router->get('admin/category/delete/{id}', 'AdminCategoryController@delete');
$router->post('admin/category/delete/{id}', 'AdminCategoryController@delete');
