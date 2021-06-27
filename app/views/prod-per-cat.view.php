<!DOCTYPE html>
<html>

<head>

    <title>Anna Sun | Busca por Categoria</title>
    <link rel="sortcut icon" href="/../public/img/company/logosemdescricao.png" type="image/x-icon">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

    <?php require('include/nav.php'); ?>

    <div class="container container-products">

    <center><a class="navbar-brand login-nav" href="/produtos"> <i class="bi bi-arrow-bar-left"></i>   Voltar</a></center>

    <?php if (!empty($produtos)) : ?>
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
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
            <?php if ($pc>1) :?>
                <li class="page-item">
                    <a class="page-link" href="?cat_id=<?php echo $_GET['cat_id']?>&pagina=<?php echo $pc-1; ?> " tabindex="-1">Anterior</a>
                </li>
            <?php else: ?>
            <li class="page-item disabled">
                    <a class="page-link" href="?cat_id=<?php echo $_GET['cat_id']?>&pagina=<?php $anterior?> " tabindex="-1">Anterior</a>
                </li>
            <?php endif;?>
                <?php for($i = 0 ; $i<$num; $i++): ?>       
                <li class="page-item"><a class="page-link" href="?cat_id=<?php echo $_GET['cat_id']?>&pagina=<?php echo $i+1; ?>"><?php echo $i+1; ?> </a></li>
            <?php endfor; ?>
            <?php if ($pc<$num) :?>
                <li class="page-item">
                    <a class="page-link" href="?cat_id=<?php echo $_GET['cat_id']?>&pagina=<?php echo $pc+1; ?> " tabindex="-1">Proximo</a>
                </li>
            <?php else: ?>
            <li class="page-item disabled">
                    <a class="page-link" href="?cat_id=<?php echo $_GET['cat_id']?>&pagina=<?php $anterior?> " tabindex="-1">Proximo</a>
                </li>
            <?php endif;?>
            </ul>
        </nav>
    <?php else : ?>

        <center><h1>Não há produtos aqui   <i class="bi bi-emoji-frown-fill"></i></h1></center>

    <?php endif; ?>

    
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>