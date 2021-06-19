<?php

$router->get('categorias' , 'CategoriesController@index');

$router->get('categorias/criar' , 'CategoriesController@cat_create');

$router->post('categorias/editar' , 'CategoriesController@cat_edit');


$router->post('categorias/create', 'CategoriesController@create');

$router->post('categorias/update', 'CategoriesController@update');

$router->post('categorias/delete', 'CategoriesController@delete');

