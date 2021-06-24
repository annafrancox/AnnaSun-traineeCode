<?php

//CATEGORIAS - get:
$router->get('categorias', 'CategoriesController@index');
$router->get('categorias/criar', 'CategoriesController@cat_create');

//CATEGORIAS - post:
$router->post('categorias/editar', 'CategoriesController@cat_edit');
$router->post('categorias/create', 'CategoriesController@create');
$router->post('categorias/update', 'CategoriesController@update');
$router->post('categorias/delete', 'CategoriesController@delete');



//PRODUTOS - get:
$router->get('produtos', 'ProdutosController@index');
$router->get('produtos/detalhes', 'ProdutosController@details');
$router->get('produtos/admin', 'ProdutosController@admin');
$router->get('produtos/admin/create', 'ProdutosController@create');

//PRODUTOS - post:
$router->post('produtos/admin/delete', 'ProdutosController@delete');
$router->post('produtos/admin/edit', 'ProdutosController@update');
$router->post('produtos/admin/editAction', 'ProdutosController@updateAction');
$router->post('produtos/admin/createAction', 'ProdutosController@createAction');
$router->post('produtos/searchCategory', 'ProdutosController@searchCategory');


//USUÁRIO - get:
$router->get('produtos/search', 'ProdutosController@search');

$router->get('adminUser', 'UserController@adm');
$router->get('addUse', 'UserController@add');
$router->get('contato', 'UserController@contact');

//USUÁRIO - post:
$router->post('adicionarUsuario', 'UserController@create');
$router->post('deleteUser', 'UserController@delete');
$router->post('view_user', 'UserController@view');
$router->post('edit_user', 'UserController@edit');
$router->post('editarUsuario', 'UserController@editar');
$router->post('enviar', 'UserController@enviarEmail');



//PAGES - get:
$router->get('', 'PagesController@index');
// $router->get('produtos','PagesController@produtos');
//$router->get('contato', 'PagesController@contato');
//$router->get('quem_somos', 'PagesController@quem_somos');
//$router->get('login', 'PagesController@login');
//$router->get('detalhes_produtos','PagesController@detalhes_produtos');
//$router->get('view_adm', 'PagesController@view_adm');
//$router->get('add_users', 'PagesController@add_users');
//$router->get('edit_users', 'PagesController@edit_users');
//$router->get('admin_produtos','PagesController@admin_produtos');
//$router->get('view_categorias', 'PagesController@view_categorias');
//$router->get('form_produto','PagesController@form_produto');
//$router->get('editar_produtos', 'PagesController@editar_produtos');
//$router->get('new_product','PagesController@new_product');
//$router->get('criar_categorias', 'PagesController@criar_categorias');
//$router->get('editar_categorias', 'PagesController@editar_categorias');
//$router->post('logar', 'LoginController@logar');
//$router->post('logout', 'LoginController@logout');
$router->get('contato', 'PagesController@contato');
$router->get('quem_somos', 'PagesController@quem_somos');
$router->get('login', 'PagesController@login');
$router->get('view_adm', 'PagesController@view_adm');

//PAGES - post:
$router->post('logar', 'LoginController@logar');
$router->post('logout', 'LoginController@logout');
