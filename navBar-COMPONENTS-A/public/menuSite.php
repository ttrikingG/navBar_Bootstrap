  <header class="container-fluid">
    <div class="container-fluid bg-light-subtle " style="padding: 0.2em;">
      <?php require './assets/partials/logo.php';?>
      <button class="btn btn-secondary btn-sm" style="float: right; margin-top: 5px;"><strong><a style="color: aliceblue;" href="register.php">Login!!!</a></strong></button>
      <button class="btn btn-outline-dark btn-sm" style="float: right; margin-left: 6px; margin-right: 6px; margin-top: 5px;"><strong><a style="color: rgb(255, 0, 0);" href="">Cadastre-se!!!</a></strong></button>
    </div>

    <nav class="font-menu-home navbar navbar-expand-sm bg-body-secondary" style="border-radius: 0px 0px 6px 6px;">

      <!--Buttom1 Home-->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar1" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin: 0.3em;">
          <span><img width="28" src="./assets/icons/home_icon.png" alt=""></span>
      </button>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar1" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header bg-body-secondary">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php require './assets/partials/logo.php';?></h5>
          <?php require './assets/partials/icons.php';?>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <ul style="padding: 0.2em;"class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <strong><a class="nav-link active" aria-current="page" href="#">Home</a></strong>
          </li>
          <li class="nav-item">
            <strong><a class="nav-link" href="#">Contato</a></strong>
          </li>
          <li class="nav-item">
            <strong><a class="nav-link" href="#">Sobre</a></strong>
          </li>
        </ul>
      </div>

      <div class="navbar navbar-expand-sm">
      <!--Buttom2 produtos-->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin: 0.3em;">
            <span><img width="28" src="./assets/icons/fashion-model_icon.png" alt=""></span>
        </button>
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header bg-body-secondary">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php require './assets/partials/logo.php';?></h5>
            <?php require './assets/partials/icons.php';?>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <!--Buttom3 Serviço-->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar3" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin: 0.3em;">
            <span><img width="28" src="./assets/icons/serviço_02_icon.png" alt=""></span>
        </button>
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar3" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header bg-body-secondary">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php require './assets/partials/logo.php';?></h5>
            <?php require './assets/partials/icons.php';?>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Serviços
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action 3</a></li>
                  <li><a class="dropdown-item" href="#">Another action3</a></li>
                  <li><a class="dropdown-item" href="#">Another action3</a></li>
                  <li><a class="dropdown-item" href="#">Another action3</a></li>
                  <li><a class="dropdown-item" href="#">Another action3</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <!--Buttom4 Posts-->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar4" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin: 0.3em;">
            <span><img width="28" src="./assets/icons/blog_icon.png" alt=""></span>
        </button>
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar4" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header bg-body-secondary">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php require './assets/partials/logo.php';?></h5>
            <?php require './assets/partials/icons.php';?>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Posts
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action 4</a></li>
                  <li><a class="dropdown-item" href="#">Another action4</a></li>
                  <li><a class="dropdown-item" href="#">Another action4</a></li>
                  <li><a class="dropdown-item" href="#">Another action4</a></li>
                  <li><a class="dropdown-item" href="#">Another action4</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!--Buttom5 pesquisa-->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar5" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin: 0.3em;">
          <span><img width="28" src="./assets/icons/lupa_01.png" alt=""></span>
      </button>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar5" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header bg-body-secondary">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php require './assets/partials/logo.php';?></h5>
            <?php require './assets/partials/icons.php';?>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <form class="d-flex" role="search" style="padding: 0.2em;">
        <!--select class="form-select" aria-label="Default select example" style="width:20%; margin-right:0.2em;">
          <option selected>All</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select-->
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Search</button>
        </form>

        
      </div>
      <!--another buttons-->
    </nav>  
  </header><br>
