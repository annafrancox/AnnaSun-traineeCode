<!DOCTYPE html>

<html>

    <head>
        <title> Quem Somos - AnnaSun </title>

        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../../public/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    </head>

    <body class="quem_somos">
        <?php require('include/nav.php'); ?>

        <!--Inicio quem somos-->
        <div class="container principal">

          <div class="row logo">
            <div class="col image-a">
                <img class="w-50 img-responsive mx-auto d-block" src="../../public/img/logo_trainee.png" alt="Logo Anna Sun, Brigaderia e Café">
            </div>
            <!---Coments-->
            <div class="col-8 texto-a">
                <h1 style="text-align: center; font-family: 'Bentham'; color: #070607; border-top: #fcd9d4 solid; border-bottom: #fcd9d4 solid;">Quem Somos</h1>
                <p style="text-align: justify; color: #070607;font-family: 'Montserrat';">A Anna Sun - Brigadeiria e Café foi fundada em 2021 com o principal objetivo de exibir nossas deliciosas receitas repletas de
                    amor e também mostrar que é possível se sentir acolhido em uma aconchegante cafeteria.</p>
                <p style="text-align: justify; color: #070607;font-family: 'Montserrat';">Espalhando amor, carinho, respeito e sabor por meio de nossos produtos, buscando sempre manter nossos valores, abrimos nossas
                    portas para uma nova experiência para toda família.</p>
            </div>
          </div>

            <!--Cards missao visão e valores-->

          <div class="card-deck cards-a">

            <div class="card">
              <div class="card-body mvv">
                <h5 class="card-title" >Missão</h5>
                <p class="card-text">Oferecer doces, serviços e atendimento de qualidade para todos</p>
              </div>
            </div>

            <div class="card">
              <div class="card-body mvv">
                <h5 class="card-title">Visão</h5>
                <p class="card-text">Ser referência pela qualidade, beleza e sabores de nossos produtos e atendimentos</p>
              </div>
            </div>

            <div class="card">
              <div class="card-body mvv">
                <h5 class="card-title">Valores</h5>
                <p class="card-text">Qualidade, respeito e dedicação</p>
              </div>
            </div>
            
          </div>

        </div>

        <?php require('include/footer.php'); ?>
        
        <!-- Bootstrap Scripts: -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  

</body>
</html>