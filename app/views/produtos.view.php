<!DOCTYPE html>
<html>

<head>

    <title>Produtos - AnnaSun</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="/public/css/style.css">
    
</head>

<body>

    <?php require('include/nav.php'); ?>

    <div class="container container-products">

        <div class="card-deck card-deck-products">

            <?php foreach ($produtos as $produto) : ?>
                <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-5">
                    <form action="/produtos/detalhes" method="GET">
                        <div class="card card-product">
                            <div class="card-img-container">
                                <img class="card-img-top" src="../../public/img/<?= $produto->imagem ?>" alt="Imagem de capa do card">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $produto->nome ?></h5>
                                <p class="card-text"><?= $produto->descricao ?></p>
                                <div class="card-info">

                                    <button href="produtos/detalhes" class="btn" type="submit">Detalhes</button>

                                    <div class="card-price">R$ <?= $produto->preco ?></div>

                                    <input type="hidden" name="id" value="<?= $produto->id ?>">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
    
    <?php require('include/footer.php'); ?> 
            
        

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>