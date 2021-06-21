<?php

$router->get('categorias', 'CategoriesController@index');

$router->get('categorias/criar', 'CategoriesController@cat_create');

$router->post('categorias/editar', 'CategoriesController@cat_edit');


$router->post('categorias/create', 'CategoriesController@create');

$router->post('categorias/update', 'CategoriesController@update');

$router->post('categorias/delete', 'CategoriesController@delete');

$router->get('produtos', 'ProdutosController@index');
$router->get('produtos/detalhes', 'ProdutosController@details');;
$router->get('produtos/admin', 'ProdutosController@admin');;
$router->post('produtos/admin/delete', 'ProdutosController@delete');

$router->post('produtos/admin/edit', 'ProdutosController@update');
$router->post('produtos/admin/editAction', 'ProdutosController@updateAction');

$router->get('produtos/admin/create', 'ProdutosController@create');
$router->post('produtos/admin/createAction', 'ProdutosController@createAction');

    $router->get('adminUser', 'UserController@adm');
    $router->get('addUse', 'UserController@add');
    $router->post('adicionarUsuario', 'UserController@create');
    $router->post('deleteUser', 'UserController@delete');
    $router->post('view_user' , 'UserController@view');
    $router->post('edit_user' , 'UserController@edit');
    $router->post('editarUsuario', 'UserController@editar');
    $router->get('contato' , 'UserController@contact');
    $router->post('enviar', 'UserController@enviarEmail');
?>
