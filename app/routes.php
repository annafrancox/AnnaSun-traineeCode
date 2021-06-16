 <?php
    $router->get('', 'UserController@index');
    $router->get('adminUser', 'UserController@adm');
    $router->get('addUse', 'UserController@add');
    $router->get('edit_users', 'UserController@edit');
    $router->post('adicionarUsuario', 'UserController@create');
    $router->post('deleteUser', 'UserController@delete');
    $router->post('view_user' , 'UserController@view');
    $router->post('edit_user' , 'UserController@edit');
    $router->post('editarUsuario', 'UserController@editar');
?>