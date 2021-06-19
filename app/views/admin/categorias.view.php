<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../js/scripts.js">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Listagem Categorias</title>
</head>

<body>
  <!-- Inicio listagem de categorias -->
  <div class="container" style="margin-bottom: 15px;">
        
    <div class="card-deck" style="margin-top: 15px;">

      <?php foreach($categorias as $categoria) : ?>

        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
          <div class="card card-bckg" style="width: 18rem;">
            <div class="card-body titulo5">
              <h5 class="card-title"><?= $categoria->nome ?></h5>
              <p class="card-text"><?= $categoria->descricao ?></p>
              <div style="text-align: right;">

              <form action="/categorias/editar" method="POST">
                <input type="hidden" name="id" value="<?= $categoria->id ?>">
                <button type="submit" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></button>
              </form>

                <form action="/categorias/delete" method="POST">
                <input type="hidden" value="<?= $categoria->id ?>" name="id">
                  <button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-placement="bottom" title="Excluir"><i class="fas fa-trash"></i></button>
                </form>

              </div>
            </div>
          </div>
        </div>    
        <?php endforeach; ?>


      </div>
      <div class="buttonSubmit">
        <a href="categorias/criar"><button type="submit" class="btn btn-addProduct mt-1"><b>Adicionar Categoria </b></button></a>
      </div>
    </div>
  <!-- Fim listagem de categorias -->
  


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
</body>
</html>