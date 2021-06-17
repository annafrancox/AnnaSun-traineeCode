<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Editar produto</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



</head>

<body class="addProduct">

    <!--viewprodutos-->
    <div class="container pt-5 formBorder">
        <form action="/produtos/admin/editAction" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome do produto</label>
                <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do produto" value="<?= $produto['nome'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Preço do produto</label>
                <input name="preco" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Preço do produto" value="<?= $produto['preco'] ?>" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Quantidade</label>
                <input name="qtdade" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Preço do produto" value="<?= $produto['qtdade'] ?>" required>
            </div>

            <div class=" form-group">
                <label for="exampleFormControlFile1">Foto do produto</label>
                <input name="imagem" type="file" class="form-control-file" id="exampleFormControlFile1">
                <img src="../../public/img/<?= $produto['imagem'] ?>">
            </div>
            <div class=" form-group">
                <label for="exampleFormControlSelect1">Categoria do produto</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição do produto</label>
                <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3" value="" required><?= $produto['descricao'] ?></textarea>
            </div>

            <div class="buttonSubmit">
                <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                <button type="submit" class="btn btn-warning"><b>Editar produto</b></button>
            </div>
        </form>
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
                    <p>Deseja relamente editar este produto?.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    <form action="produtos/admin/editAction" method="POST">
                        <button type="button" class="btn btn-warning">Confirmar</button>
                        <input type="hidden" value="<?= $produto['id'] ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--modal-->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="js/scripts.js"></script>


</body>

</html>