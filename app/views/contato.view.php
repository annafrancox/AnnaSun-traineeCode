<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Anna Sun - Contato</title>
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <?php require('include/nav.php'); ?>  

  <div class="contatofront ">
    <div class="contatoImage">
      <img src="public/img/logo_sun-removebg-preview.png" alt="logo Anna Sun">
    </div>
    <h1>Contato</h1>
  <div class="container container-Contact">
    <div class="row">
      <div class="col">
        <div class="col borda-contato pt-2 pb-2">
          <h2>Envie uma mensagem</h2>
          <hr>
          <form>
            <div class="form-group text-form">
              <label for="exampleFormControlInput1">Nome</label>
              <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Seu nome">
            </div>
            <div class="form-group text-form">
              <label for="exampleFormControlInput1">Telefone</label>
              <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Telefone">
            </div>
            <div class="form-group text-form">
              <label for="exampleFormControlInput1">Endereço de email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>
            <div class="form-group text-form">
              <label for="exampleFormControlInput1">Assunto</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Assunto">
            </div>
            <div class="form-group text-form">
              <label for="exampleFormControlTextarea1">Mensagem</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>
          <button type="button" class="btn botaoContato"><b>Enviar</b></button>
        </div>
      </div>
      <div class="col">
        <iframe class="mapaContato"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.1247953818483!2d-43.37381018558926!3d-21.775430603951815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989ba1c18d2a97%3A0xacf1ee467831259e!2sICE%20-%20UFJF!5e0!3m2!1spt-BR!2sbr!4v1620684445579!5m2!1spt-BR!2sbr"
        width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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