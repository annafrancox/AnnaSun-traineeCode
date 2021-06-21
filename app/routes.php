<?php

$router->get('','PagesController@index');
$router->get('produtos','PagesController@produtos');
$router->get('contato','PagesController@contato');
$router->get('quem_somos','PagesController@quem_somos');
$router->get('login','PagesController@login');
$router->get('detalhes_produtos','PagesController@detalhes_produtos');
$router->get('view_adm','PagesController@view_adm');
$router->get('add_users','PagesController@add_users');
$router->get('edit_users','PagesController@edit_users');
$router->get('admin_produtos','PagesController@admin_produtos');
$router->get('view_categorias','PagesController@view_categorias');
$router->get('form_produto','PagesController@form_produto');
$router->get('editar_produtos','PagesController@editar_produtos');
$router->get('new_product','PagesController@new_product');
$router->get('criar_categorias','PagesController@criar_categorias');
$router->get('editar_categorias','PagesController@editar_categorias');
$router->post('logar','PagesController@logar');

?>