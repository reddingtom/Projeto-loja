<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

</head>

<body>

  <nav class="navbar navbar-expand-lg" style="background-color: #0060B1;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="IMG/SonicBoom_logo.png" alt="Boom" width="65" height="50">
      </a>
      <a class="navbar-brand" href="index.php"><strong>Pagina Inicial</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="login.php"><strong>Login</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php"><strong>Cadastro</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faleconosco.php"><strong>Fale Conosco</strong></a>
          </li>

          
        </ul>
        <a href="carrinho.html" class="text-decoration-none" style="color: white ;"><svg
            xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart"
            viewBox="0 0 16 16">
            <path
              d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </svg></a>
      </div>
    </div>
  </nav>
  </div>

  <body>
    <div class="container-fluid" style="padding: 5%;">

      <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem; box-shadow: -7px 5px 13px 1px #00000010;">
                <div class="card-body p-5 text-center">

                  <h3 class="mb-5">Sign in</h3>
                  <form action="php/logar.php" method="post">

                    <div class="form-outline mb-4">
                      <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="nome" />
                      <label class="form-label" for="typeEmailX-2">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="typePasswordX-2" class="form-control form-control-lg" name="senha" />
                      <label class="form-label" for="typePasswordX-2">Password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-start mb-4">
                      <input class="form-check-input" type="checkbox" id="form1Example3" />
                      <label class="form-check-label" for="form1Example3"> Remember password </label>
                    </div>

                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" type="submit" style="background-color:#FF6500; " >Login</button>
                      <hr class="my-4">
                      
                    </div>
                    <p><?php
                    
                    $msg = $_GET["msg"];
                  if(!empty($msg))
                  {

                    echo $msg;
                  }
                    ?></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </body>


  <footer class="text-light" style="background-color: #0060B1;">
    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-4">
          <ul class="nav flex-column">
            <li class="nav-link"><a href="index.php" class="text-decoration-none" style="color:white" ;>Retornar à
                Loja</a></li>
            <li class="nav-link"><a href="#" class="text-decoration-none" style="color:white" ;>Sobre</a></li>
            <li class="nav-link"><a href="#" class="text-decoration-none" style="color:white" ;>Contato</a></li>
            <li class="nav-link"><a href="faleconosco.php" class="text-decoration-none" style="color:white"
                ;>Suporte</a></li>
          </ul>
        </div>
        <div class="col-8">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sed necessitatibus id asperiores iste
            fugiat, praesentium obcaecati explicabo consequatur voluptatem eos earum blanditiis dolorem eaque veritatis
            libero? Magni, nam fugiat.
          </p>
        </div>
      </div>
    </div>
    <div class="text-center" style="background-color: #333; padding: 20px;">
      &copy Todos os direitos reservados a: Grupo 1
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>

</html>