<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Visualizar produto</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <script type="text/javascript" src="../../public/js/scripts.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



</head>

<body>

    <body class="addProduct">
        <!--viewprodutos-->
        <div>
            <div class="container pt-5 pb-5 formBorder">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome do produto</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nome do produto" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Preço do produto</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="Preço do produto" readonly>
                    </div>
                    <form>
                        <div class="form-group foto-view">
                            <label for="exampleFormControlFile1">Foto do produto</label>
                            <br>
                            <img src="../../public/img/cafe-gelado-com-chantilly-31228.jpg">
                        </div>
                    </form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Categoria do produto</label>
                        <select class="form-control" id="exampleFormControlSelect1" readonly>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição do produto</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
                    </div>
                </form>
                <div class="buttonSubmit">
                    <a href="admin-produtos.html"><button type="button" class="btn btn-addProduct mt-3"><b>Voltar</b></button></a>
                </div>

            </div>
        </div>
        <!--viewprodutos-->


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    </body>

</html>