<?php
    session_start();

    if((isset ($_SESSION['email']) == true) and (isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: /login');
    }
?>
<!DOCTYPE html>

<html class="administrativa">

    <head>
        <title> Usuarios - Administrador </title>

        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">
    </head>
    

    <body class="view_adm">
    <nav class="nav-bg navbar navbar-expand-lg navbar-dark justify-content-center">

        <!-- Brand: -->
        <a class="navbar-brand brand-style" href="/adminUser">
            <img src="/public/img/company/logo_trainee.png" width="40" height="40" class="d-inline-block align-top" alt="">
            Anna Sun
        </a>

        <!-- Toggler: -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu: -->
        <div class="collapse navbar-collapse menu-styling" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="/adminUser"><i class="fas fa-home"></i> Início<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/produtos/admin"><i class="fas fa-shopping-cart"></i> Produtos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/categorias"><i class="fas fa-tags"></i> Categorias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/adminUser"><i class="fas fa-users"></i> Usuários</a>
                </li>

            </ul>

            <form method='POST' action='/logout' class= "homeadm-logout">
                <button type="submit" class="btn btn-warning">Logout</button>
            </form>

        </div>

    </nav>
        <div class=" container principal_adm">
                    <div class="card mt-2">
                        <div class="card-body sub_principal">
                            <div class="row myrow_adm">
                                <div class="col-md-3 ">
                                    <h4>Contas</h4>
                                </div>
                                <div class="col-md-19 adicionar" >
                                    <a href="addUse" type="button" class="btn btn-sm btn-allert " >Adicionar</a>
                                </div>
                                
                            </div>
                            <div class="row ">
                                <div class="col-md-12">
                                    <table class="table table-hover ">
                                        <thead class="bg-light topicos">
                                        <tr>
                                            <th>Usuário</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach ($usuarios as $usuario) :?>
                                        <tr class="dados">
                                            <td >
                                                <img class="rounded-circle perfil-pic" src="public/img/<?= $usuario->imagem?>" alt="">
                                            </td>  
                                            <td><small><?= $usuario->nome;?></small></td>
                                            <td><small><?= $usuario->email;?></small></td>
                                            <td>
                                            
                                            <div class = "formUser container">
                                                <form method = "POST" action = "view_user">
                                                <input type = "hidden" name = "id" value=<?= $usuario->id?>>
                                                <button type="submit" class="btn"><i class="fa fa-eye"></i>
                                                </form>
                                            
                                                <form method = "POST" action = "deleteUser">
                                                <input type = "hidden" name="id" value = <?= $usuario->id ?>>
                                                <button type="submit" class="btn"><i class="botao_excluir fa fa-trash"></i>
                                                </form>

                                                <form method = "POST" action = "edit_user">
                                                <input type = "hidden" name = "id" value=<?= $usuario->id?>>
                                                <button type="submit" class="btn"><i class="botao_editar fa fa-pencil-square-o"></i>
                                                </form>
                                            </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>


       <!---Modal excluir-->

        <div class="modal confirmar_excluir" tabindex="-1" id="excluir" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Excluir usuário</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Deseja realmente excluir esse usuário?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary botao_modal_cancelar" data-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary botao_modal_confirma">Confirmar</button>
                </div>
              </div>
            </div>
          </div>

        <!---Modal excluir--->

        <!-- Modal para vizualização -->
        <div id="modal_users" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    
                    <div class="imagem_modal"> 
                        <img class="rounded-circle " src="public/img/perfil1_adm.jpg" alt="">
                    </div>

                    <div class="row ">
                        <div class="col-md-12">
                            <table class="table table-hover ">
                                <thead class="bg-light topicos">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Senha</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="dados_visualizar">
                                    <td><small><?= $usuario->nome;?></small></td>
                                    <td><small><?= $usuario->email;?></small></td>
                                    <td><small><?= $usuario->senha;?></small></td>
                                    <td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Fim modal de vizualização -->

             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            
        </body>

</html>