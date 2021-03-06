<?php
    session_start();
?>
<!DOCTYPE html>

<html>

<head>

    <title>Anna Sun | Login</title>
    <link rel="sortcut icon" href="/../public/img/company/logosemdescricao.png" type="image/x-icon">

    <!-- Metas: -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS: -->
    <link rel="stylesheet" href="/public/css/style.css">
    
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

        <nav class="navbar nav-icons justify-content-center">
            <a class="navbar-brand login-nav" href="/"> <i class="bi bi-arrow-return-left"></i>    <i class="fas fa-home"></i> </a>
        </nav>
    
    <!-- Main content: -->
    
    <div class="container align-items-center login-container">

        <div class="d-flex justify-content-center h-100">

            <div class="card align-self-center card-login">

                <div class="card-header">
                    <h4 class="d-block">Entre na sua conta</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="/logar" id="formlogin" name="formlogin">
                        <fieldset>
                            <div class="input-group form-group login-info">

                            <div class="input-group-prepend ic-login">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>

                            <input name="email" type="email" class="form-control" id="email" placeholder="nome@provedor.com">

                            </div>

                            <div class="input-group form-group login-info">

                            <div class="input-group-prepend ic-login">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>

                            <input name="senha" type="password" class="form-control" id="senha" placeholder="**********">

                            </div>

                            <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login-btn">
                            </div>
                        </fieldset>
                    </form>
                    <p class="text-center text-danger">
                        <?php
                            if(isset($_SESSION['loginErro'])){
                                echo $_SESSION['loginErro'];
                                unset($_SESSION['loginErro']);
                            }
                        ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>    

</html>