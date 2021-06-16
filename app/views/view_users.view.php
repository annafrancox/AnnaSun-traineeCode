<!DOCTYPE html>

<html class="administrativa">

    <head>
        <title> Visualizar Usuarios - Administrador </title>

        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">
    </head>


    <body class="edit_user_adm">

     <div>

        <div  class = " container pt-5 formBorder form_edit">
            <?php foreach ($visual as $view) : ?>
            <form>
                <div  class = " form-group ">
                    <label label  for = " exampleFormControlInput1 " > Nome </label>
                    <input type = " email " value =" <?= $view->nome?>"  class = " form-control digita_adm " id = " exampleFormControlInput1 "readonly>
                </div>
                <formulário>
                    <div  class = " form-group ">
                        <label label  for = " exampleFormControlInput1 " > Email </label>
                        <input  type = " email " value =" <?= $view->email?>"  class = " form-control digita_adm" id = " exampleFormControlInput1 "readonly>
                    </div>
                    <div  class = " form-group ">
                        <label label  for = " exampleFormControlInput1 " > Senha </label>
                        <input  type = " email " value =" <?= $view->senha?>"  class = " form-control digita_adm" id = " exampleFormControlInput1 "readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Foto</label>
                      <img src =" <?= $view->foto?>"> 
                    </div>
           
            <div  class = " buttonSubmit ">
                <button  type = " button " class = " btn mt-3 button_users " > <b> voltar    </b> </button>
            </div>
            </form>
        <?php endforeach; ?>

        </div>
    </div>



    <script  src = " https://code.jquery.com/jquery-3.3.1.slim.min.js "
        integridade = " sha384-q8i / X + 965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH + 8abtTE1Pi6jizo "
        crossorigin = " anonymous " > </script>
    <script  src = " https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js "
        integridade = " sha384-ZMP7rVo3mIykV + 2 + 9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK / l8WvCWPIPm49 "
        crossorigin = " anonymous "> </script>
    <script  src = " https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js "
        integridade = " sha384-ChfqqxuZUCnJSK3 + MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW / JmZQ5stwEULTy "
        crossorigin = " anonymous "> </script>
        </body>

</html>
