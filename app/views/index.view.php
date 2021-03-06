<!DOCTYPE html>

<html>

<head>
    <!-- Title: -->
    <title>Anna Sun | Home</title>
    <link rel="sortcut icon" href="/../public/img/company/logosemdescricao.png" type="image/x-icon">

    <!-- Metas: -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS: -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- Bootstrap core CSS: -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap: -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap Icons: -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font Awesome: -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <!-- Fonts: -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php require('include/nav.php'); ?>

    <!-- Container: -->
    <div class="container space">

        <!-- Carousel: -->
        <div class="carousel slide justify-content-center" data-ride="carousel" id="carouselAnnaSun">

            <!-- Carousel Indicators: -->
            <ol class="carousel-indicators">
                <li data-target="#carouselannaSun" data-slide-to="0" class="active"></li>
                <li data-target="#carouselannaSun" data-slide-to="1"></li>
                <li data-target="#carouselannaSun" data-slide-to="2"></li>
                <li data-target="#carouselannaSun" data-slide-to="3"></li>
            </ol>

            <!-- Carousel Inner: -->
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <a href="/produtos">
                        <img src="public/img/carousel/cupcakes.jpg" alt="Primeiro Produto" class="d-block w-100">
                        <div id="carouselText" class="carousel-caption d-none d-md-block">
                            <h5>Conhe??a nossos produtos</h5>
                            <p>Veja todos os nossos produtos.</p>
                        </div>
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/produtos">
                        <img src="public/img/carousel/cookies.jpg" alt="Segundo Produto" class="d-block w-100">
                        <div id="carouselText" class="carousel-caption d-none d-md-block">
                            <h5>Conhe??a nossos produtos</h5>
                            <p>Veja todos os nossos produtos.</p>
                        </div>
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/produtos">
                        <img src="public/img/carousel/coffee.jpg" alt="Terceiro Produto" class="d-block w-100">
                        <div id="carouselText" class="carousel-caption d-none d-md-block">
                            <h5>Conhe??a nossos produtos</h5>
                            <p>Veja todos os nossos produtos.</p>
                        </div>
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/produtos">
                        <img src="public/img/carousel/candy.jpg" alt="Terceiro Produto" class="d-block w-100">
                        <div id="carouselText" class="carousel-caption d-none d-md-block">
                            <h5>Conhe??a nossos produtos</h5>
                            <p>Veja todos os nossos produtos.</p>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Carousel Controls: -->
            <a class="carousel-control-prev" href="#carouselAnnaSun" role="button" data-slide="prev">
                <i class="fas icone-carousel fa-caret-square-left"></i>
            </a>

            <a class="carousel-control-next" href="#carouselAnnaSun" role="button" data-slide="next">
                <i class="fas icone-carousel fa-caret-square-right"></i>
            </a>

        </div>

        <!-- Main: -->
        <div class="main">

            <!-- About Us: -->
            <div class="row info">

                <!-- Logo - About Us: -->
                <div class="col-md info-inside">
                    <img class="img-responsive mx-auto d-block" src="public/img/company/logocirculo.png" alt="Logo da empresa">
                </div>

                <!-- Info - About Us: -->
                <div class="col-md info-inside">
                    <h4>Quem somos n??s</h4>
                    <p>A Anna Sun - Brigadeiria e Caf?? foi fundada em 2021 com o principal objetivo de exibir nossas deliciosas receitas repletas de amor e tamb??m mostrar que ?? poss??vel se sentir acolhido em uma aconchegante cafeteria.</p>
                    <a href="/quem_somos" class="btn btn-lg active mx-auto d-block" role="button" aria-pressed="true">Saiba Mais!</a>
                </div>

            </div>


            <hr>


            <!-- Product Page: -->
            <div class="productPage text-center">

                <!-- Title - Product Page: -->
                <h1>Conhe??a nossos produtos!</h1>

                <!-- Card-deck - Product Page: -->
                <div class="card-deck justify-content-center">
                    <?php foreach (array_slice($produtos,0,4)as $produto) : ?>
                        <div class="card product">
                            <a id="noStyle" href="/produtos/detalhes/?id=<?= $produto->id ?>">
                                <img class="card-img-top" src="public/img/<?= $produto->imagem ?>" alt="Produto 1">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $produto->nome ?></h4>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <!-- More products -->

                </div>
            </div>
            <hr>

            <!-- Contact Page: -->

            <div class="contactPage">
                <div class="contact">
                    <h4>Precisa falar com a gente?</h4>
                    <a href="/contato" class="btn btn-lg active mx-auto" role="button" aria-pressed="true">Saiba Mais!</a>
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