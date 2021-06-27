<meta charset="utf-8">
<title>Anna Sun Administração | Produtos</title>
<link rel="sortcut icon" href="/../public/img/company/logosemdescricao.png" type="image/x-icon">

<link rel="stylesheet" href="../../public/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

<?php require('include/nav_adm.php'); ?>
    <!--viewprodutos-->
    <div class="container  ">
        <div class="card-deck mt-5 ">
            <?php foreach ($produtos as $produto) : ?>
            <div class="col-md col-xl-4 ">
                <div class="card   cardAdminProd mb-5">
                    <img class="card-img-top" src="../../public/img/<?= $produto->imagem ?>"
                        alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title"><b>
                                <?= $produto->nome ?>
                            </b></h5>
                        <div class="container buttonAdminProd">
                            <form action="/produtos/detalhes" method="GET">
                                <input type="hidden" value="<?= $produto->id ?>" name="id">
                                <button type="submit" class="btn btn-outline-dark"><i class="fas fa-eye"></i></button>
                            </form>

                            <form action="/produtos/admin/edit" method="POST">
                                <input type="hidden" value="<?= $produto->id ?>" name="id">
                                <button href="#" class="btn btn-outline-warning mr-2 ml-2"><i
                                        class="fas fa-edit"></i></button>

                            </form>
                            <form action="/produtos/admin/delete" method="POST">
                                <input type="hidden" value="<?= $produto->id ?>" name="id">
                                <button type="submit" class="btn btn-outline-danger"><i
                                        class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <?php for($i = 0 ; $i<$num; $i++): ?>
                <li class="page-item"><a class="page-link" href="?pagina=<?php echo $i+1; ?>"><?php echo $i+1; ?> </a></li>
                <?php endfor; ?>
                <li class="page-item">  
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="buttonCreate">
        <a type="button" class="btn btn-warning mt-5 buttonCreate mb-5" href="/produtos/admin/create"><b>Adicionar novo
                produto</b></a>
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
                    <p>Deseja realmente excluir este produto?.</p>
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