<?php

$router->get('','PagesController@index');
$router->get('produtos','PagesController@produtos');
$router->get('contato','PagesController@contato');
$router->get('quem_somos','PagesController@quem_somos');
$router->get('login','PagesController@login');
$router->get('detalhes_produtos','PagesController@detalhes_produtos');

?>