<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="../js/scripts.js">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Criação</title>
</head>
<body>
        <div class=" container pt-5 formBorder">

            <form action="/categorias/create" method="POST">
            
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome da categoria</label>
                    <input type="text" name="categoryName" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nome do produto">
                </div>
            

            <div class="buttonSubmit">
                <button type="submit" class="btn btn-addProduct mt-3"><b>Adicionar categoria</b></button>
            </div>

            </form>

        </div>
</body>
</html>