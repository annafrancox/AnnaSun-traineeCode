 <?php

  $router->get('produtos', 'ProdutosController@index');
  $router->get('produtos/detalhes', 'ProdutosController@details');;
  $router->get('produtos/admin', 'ProdutosController@admin');;
  $router->post('produtos/admin/delete', 'ProdutosController@delete');

  $router->post('produtos/admin/edit', 'ProdutosController@update');
  $router->post('produtos/admin/editAction', 'ProdutosController@updateAction');

  $router->get('produtos/admin/create', 'ProdutosController@create');
  $router->post('produtos/admin/createAction', 'ProdutosController@createAction');
