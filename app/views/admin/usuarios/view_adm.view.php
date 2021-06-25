<!DOCTYPE html>

<html>

    <head>
        <title> Usuarios - Administrador </title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/public/css/style.css">
        <link rel="stylesheet" href="../js/scripts.js">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>

    <nav class="nav-bg navbar navbar-expand-lg navbar-dark justify-content-center">

        <!-- Brand: -->
        <a class="navbar-brand brand-style" href="#">
            <img src="/public/img/company/logo_trainee.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>

        <!-- Toggler: -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu: -->
        <div class="collapse navbar-collapse menu-styling" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="/"><i class="fas fa-home"></i> Início<span class="sr-only">(current)</span></a>
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col ">
                                    <h4>Contas</h4>
                                </div>
                                <div class="col-auto adicionar">
                                    <a href="/addUse" ><button type="submit" class="btn btn-warning" >Adicionar</button></a>
                                </div> 
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
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
                                                    <td class="dados-txt">
                                                        <img class="rounded-circle perfil-pic" src="public/img/<?= $usuario->imagem?>" alt="">
                                                    </td>  
                                                    <td class="dados-txt"><small><?= $usuario->nome;?></small></td>
                                                    <td class="dados-txt"><small><?= $usuario->email;?></small></td>
                                                    <td class="dados-center ">
                                                    
                                                    <div class ="container formUser">
                                                        <form method = "POST" action = "view_user" class="buttonAdminProd">
                                                        <input type = "hidden" name = "id" value=<?= $usuario->id?>>
                                                        <button type="submit" class="btn"><i class="fa fa-eye"></i>
                                                        </form>

                                                        <form method = "POST" action = "edit_user" class="buttonAdminProd">
                                                        <input type = "hidden" name = "id" value=<?= $usuario->id?>>
                                                        <button type="submit" class="btn"><i class="botao_editar fas fa-edit"></i>
                                                        </form>

                                                        <form method = "POST" action = "deleteUser" class="buttonAdminProd">
                                                        <input type = "hidden" name="id" value = <?= $usuario->id ?>>
                                                        <button type="submit" class="btn"><i class="botao_excluir fa fa-trash"></i>
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


             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            
        </body>

</html>