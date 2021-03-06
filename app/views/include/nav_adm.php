<nav class="nav-bg navbar navbar-expand-lg navbar-dark justify-content-center">

    <!-- Brand: -->
    <a class="navbar-brand brand-style" href="#">
        <img src="/public/img/company/logosemdescricao.png" width="40" height="40" class="d-inline-block align-top" alt="">
    </a>

    <!-- Toggler: -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Menu: -->
    <div class="collapse navbar-collapse menu-styling" id="navbarNav">

        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="/"><i class="fas fa-home"></i> Início<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/produtos/admin"><i class="fas fa-shopping-cart"></i> Produtos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/categorias"><i class="fas fa-tags"></i> Categorias</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/adminUser"><i class="fas fa-users"></i> Usuários</a>
            </li>

        </ul>

        <form method='POST' action='/logout' class= "homeadm-logout">
            <button type="submit" class="btn btn-warning">Logout</button>
        </form>

    </div>

</nav>