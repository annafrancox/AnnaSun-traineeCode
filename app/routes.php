<?php
//CRUD CATEGORIAS
$router->get('categorias', 'CategoriesController@index');
$router->get('categorias/criar', 'CategoriesController@cat_create');
$router->post('categorias/editar', 'CategoriesController@cat_edit');
$router->post('categorias/create', 'CategoriesController@create');
$router->post('categorias/update', 'CategoriesController@update');
$router->post('categorias/delete', 'CategoriesController@delete');
//CRUD CATEGORIAS





//CRUD PRODUTOS
$router->get('produtos', 'ProdutosController@index');
$router->get('produtos/detalhes', 'ProdutosController@details');
$router->get('produtos/admin', 'ProdutosController@admin');
$router->post('produtos/admin/delete', 'ProdutosController@delete');
$router->post('produtos/admin/edit', 'ProdutosController@update');
$router->post('produtos/admin/editAction', 'ProdutosController@updateAction');
$router->get('produtos/admin/create', 'ProdutosController@create');
$router->post('produtos/admin/createAction', 'ProdutosController@createAction');
//CRUD PRODUTOS




//CRUD USUARIOS
$router->get('adminUser', 'UserController@adm');
$router->get('addUse', 'UserController@add');
$router->post('adicionarUsuario', 'UserController@create');
$router->post('deleteUser', 'UserController@delete');
$router->post('view_user', 'UserController@view');
$router->post('edit_user', 'UserController@edit');
$router->post('editarUsuario', 'UserController@editar');

//CRUD USUARIOS





//PAGES
$router->get('','PagesController@index');
$router->get('contato', 'UserController@contact');
$router->post('enviar', 'UserController@enviarEmail');
$router->get('quem_somos','PagesController@quem_somos');
$router->get('login','PagesController@login'); 
$router->get('quem_somos', 'PagesController@quem_somos');
$router->get('login', 'PagesController@login');
$router->post('logar', 'LoginController@logar');
$router->post('logout', 'LoginController@logout');
$router->get('view_adm', 'UserController@adm');
//PAGES