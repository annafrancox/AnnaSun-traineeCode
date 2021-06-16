<!DOCTYPE html>

<html class="administrativa">

<head>
    <meta charset="utf-8">
    <title>Anna Sun - Administrar Produtos</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body class="addProduct">
     <!--viewprodutos-->
    <div class="container  ">
        <div class="contAdminProd">
            <div class="card-deck mt-5">
                <div class=" col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card   cardAdminProd">
                        <img class="card-img-top" src="../../public/img/da2b024ff6c21ea7ea0ddcd0a4511dad.jpg"
                            alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Produto 1</b></h5>
                            <div class="container buttonAdminProd">
                                <a href="#" class="btn btn-outline-dark"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-outline-warning mr-2 ml-2"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                    data-target="#myModal"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card   cardAdminProd">
                        <img class="card-img-top" src="../../public/img/da2b024ff6c21ea7ea0ddcd0a4511dad.jpg"
                            alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Produto 1</b></h5>
                            <div class="container buttonAdminProd">
                                <a href="#" class="btn btn-outline-dark"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-outline-warning mr-2 ml-2"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                    data-target="#myModal"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card   cardAdminProd">
                        <img class="card-img-top" src="../../public/img/da2b024ff6c21ea7ea0ddcd0a4511dad.jpg"
                            alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Produto 1</b></h5>
                            <div class="container buttonAdminProd">
                                <a href="#" class="btn btn-outline-dark"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-outline-warning mr-2 ml-2"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                    data-target="#myModal"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="buttonCreate">
            <button type="button" class="btn btn-warning mt-5 buttonCreate mb-5"><b>Adicionar novo produto</b></button>
        </div>
    </div>
    <!--viewprodutos-->

    <!--modal-->
    <div class="modal" tabindex="-1" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Deseja relamente excluir este produto?.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
    <!--modal-->




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

</body>

</html>