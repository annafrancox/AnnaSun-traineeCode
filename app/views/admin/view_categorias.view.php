<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/js/scripts.js">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Listagem Categorias</title>
    
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-bg justify-content-center">
      <!-- Brand: -->
      <a class="navbar-brand brand-style" href="/view_adm">
          <img src="/public/img/company/logo_trainee.png" width="40" height="40" class="d-inline-block align-top" alt="">
          Anna Sun
      </a>
      <!-- Toggler: -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar Menu: -->
      <div class="collapse navbar-collapse menu-styling" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="/view_adm"><i class="fas fa-home"></i> Início<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/admin_produtos"><i class="fas fa-shopping-cart"></i> Produtos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/view_categorias"><i class="fas fa-tags"></i> Categorias</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/view_adm"><i class="fas fa-users"></i> Usuários</a>
              </li>
          </ul>
      </div>
    </nav>

  <!-- Inicio listagem de categorias -->
  <div class="container" style="margin-bottom: 15px;">
        
    <div class="card-deck" style="margin-top: 15px;">

        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
          <div class="card card-bckg" style="width: 18rem;">
            <img class="card-img-top" src="/public/img/bem_casados.jpeg" alt="Card image cap">
            <div class="card-body titulo5">
              <h5 class="card-title">Bem casados</h5>
              <p class="card-text">Quem resiste a um delicioso bem-casado? O docinho tradicional é a melhor lembrança de uma festa de casamento para todos os convidados!</p>
              <div style="text-align: right;">
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modal_bemcasados" data-placement="bottom" title="Ver"><i class="far fa-eye"></i></button>
                <!-- Modal para vizualização -->
                <div id="modal_bemcasados" class="modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Bem casados</h5>
                      </div>
                      <div class="modal-body modalcentro">
                        <img src="/public/img/bem_casados.jpeg" alt="">
                        <p>Casadinho ou bem-casado é um doce popular em Portugal e no Brasil, principalmente nas festas de casamento. Além do sabor bastante doce, destaca-se pela atenção dada à elaboração das embalagens com que são produzidos, feitas geralmente de papel crepom e fitas de cetim.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Fim modal de vizualização -->
                <a href="/editar_categorias"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></button></a>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal_exclusao" data-placement="bottom" title="Excluir"><i class="fas fa-trash"></i></button>
                <!-- Modal de exclusão -->
                <div id="modal_exclusao" class="modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Cuidado!</h5>
                      </div>
                      <div class="modal-body modalcentro">
                        <p>Deseja excluir essa categoria ?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Fim modal de exclusão -->
              </div>             
            </div>
          </div>
        </div>    

        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
          <div class="card card-bckg" style="width: 18rem;">
              <img class="card-img-top" src="/public/img/bolo_de_pote.jpg" alt="Card image cap">
              <div class="card-body titulo5">
                <h5 class="card-title">Bolos de Pote</h5>
                <p class="card-text">Essas delícias são muito populares em todo o Brasil porque não tem como resistir a esses maravilhosos bolinhos vendidos em porção individual dentro de um potinho.</p>
                <div style="text-align:right;">
                  <a><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modal_bolosdepote" data-placement="bottom" title="Ver"><i class="far fa-eye"></i></button></a>
                  <!-- Modal para vizualização -->
                  <div id="modal_bolosdepote" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Bolos de pote</h5>
                        </div>
                        <div class="modal-body modalcentro">
                          <img src="/public/img/bolo_de_pote.jpg" alt="">
                          <p>Diferentemente dos bolos tradicionais, os bolos de pote são mais molhadinhos para garantir que as garfadas no potinho trarão um doce cremoso e fácil de degustar. Caso fiquem muito úmidos, os bolos comuns podem ter a estrutura da massa comprometida e até desmontar. No pote, eles ficam firmes mesmo com a mistura abundante de caldas e recheios.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Fim modal de vizualização -->
                  <a href="/editar_categorias"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></button></a>
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal_exclusao" data-placement="bottom" title="Excluir"><i class="fas fa-trash"></i></button>
                </div>  
              </div>
          </div>
        </div>
        
        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
          <div class="card card-bckg" style="width: 18rem;">
              <img class="card-img-top" src="/public/img/bolos.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Bolos</h5>
                <p class="card-text">Um bom bolo de chocolate fofinho aquece o coraçãozinho, né? Os bolos são um dos componentes principais das festas, como as de aniversário e casamento.</p>
                <div style="text-align: right;">
                  <a><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modal_bolos" data-placement="bottom" title="Ver"><i class="far fa-eye"></i></button></a>
                  <!-- Modal para vizualização -->
                  <div id="modal_bolos" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Bolos</h5>
                        </div>
                        <div class="modal-body modalcentro">
                          <img src="/public/img/bolos.jpg" alt="">
                          <p>Bolo é um alimento à base de massa de farinha, geralmente doce e cozido no forno. Os bolos são um dos componentes principais das festas, como as de aniversário e casamento, por vezes ornamentados artisticamente e ocupando o lugar central da mesa.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Fim modal de vizualização -->
                  <a href="/editar_categorias"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></button></a>
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal_exclusao" data-placement="bottom" title="Excluir"><i class="fas fa-trash"></i></button>
                </div>  
              </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
          <div class="card card-bckg" style="width: 18rem;">
              <img class="card-img-top" src="/public/img/brownie.jpg" alt="Card image cap">
              <div class="card-body titulo5">
                <h5 class="card-title">Brownies</h5>
                <p class="card-text">Brownie é uma sobremesa de chocolate típico da culinária dos Estados Unidos e pode considerar-se um bolo de tabuleiro partido em pequenos quadrados.</p>
                <div style="text-align: right;">
                  <a><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modal_brownies" data-placement="bottom" title="Ver"><i class="far fa-eye"></i></button></a>
                  <!-- Modal para vizualização -->
                  <div id="modal_brownies" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Brownies</h5>
                        </div>
                        <div class="modal-body modalcentro">
                          <img src="/public/img/brownie.jpg" alt="">
                          <p>Brownie é uma sobremesa de chocolate típico da culinária dos Estados Unidos e pode considerar-se um bolo feito num tabuleiro para bolos e partido em pequenos quadrados. É geralmente acompanhado por sorvete, mas pode ter uma cobertura de geléia de Damasco e pedaços de nozes na massa.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Fim modal de vizualização -->
                  <a href="/editar_categorias"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></button></a>
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal_exclusao" data-placement="bottom" title="Excluir"><i class="fas fa-trash"></i></button>
                </div>  
              </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
          <div class="card card-bckg" style="width: 18rem;">
            <img class="card-img-top" src="/public/img/cheseecake.jpg" alt="Card image cap">
            <div class="card-body titulo5">
              <h5 class="card-title">Cheseecakes</h5>
              <p class="card-text">Traduzido do inglês-Cheesecake é um doce composto por uma ou mais camadas. A camada principal consiste em uma mistura de queijo, ovos e açúcar. </p>
              <div style="text-align: right;">
                <a><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modal_cheseecakes" data-placement="bottom" title="Ver"><i class="far fa-eye"></i></button></a>
                <!-- Modal para vizualização -->
                <div id="modal_cheseecakes" class="modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Cheesecakes</h5>
                      </div>
                      <div class="modal-body modalcentro">
                        <img src="/public/img/cheseecake.jpg" alt="">
                        <p>Cheesecake é uma sobremesa doce composta por uma ou mais camadas. A camada principal e mais espessa consiste em uma mistura de queijo fresco e macio, ovos e açúcar. Se houver uma camada inferior, geralmente consiste em uma crosta ou base feita de biscoitos triturados, biscoitos, massa ou, às vezes, pão de ló.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Fim modal de vizualização -->
                <a href="/editar_categorias"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></button></a>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal_exclusao" data-placement="bottom" title="Excluir"><i class="fas fa-trash"></i></button>
              </div>  
            </div>
          </div>
        </div>
           
        <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-3">
          <div class="card card-bckg" style="width: 18rem;">
             <img class="card-img-top" src="/public/img/brigadeiro.jpg" alt="Card image cap">
              <div class="card-body titulo5">
                <h5 class="card-title">Brigadeiros</h5>
                <p class="card-text">O brigadeiro com origem no Sudeste do país, que rapidamente se difundiu pelo Brasil, tornando-se comum em todo o país a sua presença em festas de aniversário</p>
                <div style="text-align: right;">
                  <a><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modal_brigadeiros" data-placement="bottom" title="Ver"><i class="far fa-eye"></i></button></a>
                  <!-- Modal para vizualização -->
                  <div id="modal_brigadeiros" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Cheesecakes</h5>
                        </div>
                        <div class="modal-body modalcentro">
                          <img src="/public/img/brigadeiro.jpg" alt="">
                          <p>O brigadeiro é um doce típico da culinária brasileira, com origem no Sudeste do país, que rapidamente se difundiu pelo Brasil, tornando-se comum em todo o país a sua presença em festas de aniversário, junto com doces como o cajuzinho e o beijinho. É conhecido também no Rio Grande do Sul pelo nome de negrinho.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Fim modal de vizualização -->
                  <a href="/editar_categorias"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></button></a>
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal_exclusao" data-placement="bottom" title="Excluir"><i class="fas fa-trash"></i></button>
                </div>  
              </div>
          </div>
        </div>

      </div>
      <div class="buttonSubmit">
        <a href="/criar_categorias"><button type="button" class="btn btn-addProduct mt-1"><b>Adicionar Categoria </b></button></a>
      </div>
    </div>
  <!-- Fim listagem de categorias -->
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
</body>
</html>