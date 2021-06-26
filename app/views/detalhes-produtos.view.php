<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Produtos</title>
</head>



<body>
    <div class="products-wrapper">
        <?php foreach ($produto as $prod) : ?>
            <div class="product-details">
                <div class="image-container">
                    <img src="../../public/img/<?= $prod->imagem ?>" alt="">
                </div>
                <div class="product-body">
                    <h1 class="product-title"><?= $prod->nome ?></h1>
                    <p class="product-description"><?= $prod->descricao ?> </p>

                    <?php foreach ($categoria as $cat) : ?>
                        <p class="product-description">Categoria: <?= $cat->nome ?> </p>
                    <?php endforeach; ?>

                    <div class="product-body-container">
                        <button class="btn product-price"> R$<?= $prod->preco ?></button>
                        <p class="product-estoque"><?= $prod->qtdade ?> unidades restantes</p>
                    </div>
                </div>
                
            </div>
            
        <?php endforeach; ?>
    </div>
        <div class="buttonSubmit ">
            <a href="/produtos/admin"><button class="btn btn-warning"><b>Voltar</b></button></a>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>