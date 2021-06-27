<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anna Sun Administração | Categoria</title>
    <link rel="sortcut icon" href="/../public/img/company/logosemdescricao.png" type="image/x-icon">

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
        <img src="/public/img/company/logosemdescricaocirculo.png" class="d-inline-block align-top" alt="">
    </a>

    <!-- Toggler: -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Menu: -->
    <div class="collapse navbar-collapse menu-styling" id="navbarNav">

        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="/"><i class="fas fa-home"></i> Início</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/produtos/admin"><i class="fas fa-shopping-cart"></i> Produtos</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/categorias"><i class="fas fa-tags"></i> Categorias<span class="sr-only">(current)</span></a>
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
  <!-- Inicio listagem de categorias -->
  <div class="container" style="margin-bottom: 15px;">
        
    <div class="card-deck" style="margin-top: 15px;">

      <?php foreach($categorias as $categoria) : ?>

        <div class="col-sm-12 col-md-6 d-flex justify-content-center mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body titulo5">
              <h5 class="card-title"><?= $categoria->nome ?></h5>
              <div style="text-align: right;">

            <div class="category_buttons_ed buttonAdminProd">
             
              <form action="/categorias/editar" method="POST" class="buttonAdminProd">
                <input type="hidden" name="id" value="<?= $categoria->id ?>">
                <button type="submit" class="btn-inline btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></button>
              </form>

                <form action="/categorias/delete" method="POST" class="buttonAdminProd">
                <input type="hidden" value="<?= $categoria->id ?>" name="id">
                  <button type="submit" class="btn-inline btn btn-outline-danger" data-toggle="modal" data-placement="bottom" title="Excluir"><i class="fas fa-trash"></i></button>
                </form>

            </div>

              </div>
            </div>
          </div>
        </div>    
        <?php endforeach; ?>

      </div>
      <div class="buttonSubmit">
        <a href="/categorias/criar"><button type="submit" class="btn btn-addProduct mb-2"><b>Adicionar Categoria </b></button></a>
      </div>

    </div>
  <!-- Fim listagem de categorias -->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
</body>
</html>