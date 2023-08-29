<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Pagina Inicial</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

  <script> 
  function car() {
  alert ("Adicionado ao carrinho");
}

  </script>

</head>

<body>
  
  <?php include_once 'php/sessao.php'; ?>
  <nav class="navbar navbar-expand-lg" style="background-color: #0060B1;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="IMG/SonicBoom_logo.png" alt="Boom" width="65" height="50">
      </a>
      <a class="navbar-brand" href="index.php">
        <strong>Pagina Inicial</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
          if (!isset($_SESSION["nome"])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php?msg=">
                <strong>Login</strong>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php">
                <strong>Cadastro</strong>
              </a>
            </li>
          <?php
          }



          if ((isset($_SESSION["idcargo"]) == 1)) { ?>
            <li class="nav-item">
              <a class="nav-link" href="adm/adm.php">
                <strong>Menu Adm</strong>
              </a>
            </li>
          <?php
          }
          ?>

          <li class="nav-item">
            <a class="nav-link" href="faleconosco.php">
              <strong>Fale Conosco</strong>
            </a>
          </li>


          <form action="index.php" method="get" id="pesq" class="d-flex align-midden" role="search">
            <input class="form-control me-2" type="text" name="pesq" placeholder="Pesquisar" aria-label="Search" style="box-shadow: -7px 5px 13px 1px #00000010;">
          </form>
          
        </ul>
        <?php
        if (isset($_SESSION["nome"])) { ?>
          <a href="php/sairdasessao.php" class="text-decoration-none justify-content-cente">
            <input type="button" value="Sair" class="btn btn-danger" style="padding-right:-4%; margin-right: 20px; background-color: #FF6500;">
          </a>
        <?php
        }
        ?>
        <a href="carrinho.php?id=" class="text-decoration-none" style="color: white ;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </svg></a>
        </svg>
      </div>
    </div>
  </nav>
  </div>
  <div class="container-fluid" style="padding: 5%;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if($URL_ATUAL === "http://localhost/projetos/Projeto2.0/index.php") {
      header("location:index.php?pesq=");
      }
      elseif($URL_ATUAL === "http://localhost/projetos/Projeto2.0/")
        {
          header("location:index.php?pesq=");
        }
    
      $pesquisa = $_GET["pesq"];
      include_once 'php/conexao.php';
      $sql = "select imagem, nome, descricao, idprod, preco from itens where nome like '%" . $pesquisa . "%'";
      $result = mysqli_query($con, $sql);



      while ($row = mysqli_fetch_array($result)) { ?>

        <div class="col">
          <a href="pagina2.php?id=<?php echo $row["idprod"]; ?>">
            <div class="card h-100" style="box-shadow: -7px 5px 13px 1px #00000010;">
              <img src="img/<?php echo $row["imagem"]; ?>" class="rounded mx-auto d-block" alt="..." style="width: 50%; max-width: 200px;">
          </a>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["nome"]; ?></h5>
            <p class="card-text"><?php echo $row["descricao"]; ?></p>
            <p class="card-text" style="color: #0060B1;">R$ <?php echo $row["preco"]; ?></p>
            <?php if (!isset($_SESSION["nome"])) { ?>
              <a href="login.php?msg=logue na conta primeiro" class="btn btn-primary" style="background-color: #FF6500;">Adicionar ao Carrinho</a>
            <?php } else { ?>
             
              <a href="php/gravar-carrinho.php?id=<?php echo $row["idprod"]; ?>" onclick="car()" id="car" class="btn btn-primary" style="background-color: #FF6500;">Adicionar ao Carrinho</a>
            
              
            <?php } ?>
          </div>
        </div>
    </div>
  <?php
      }
  ?>
  </div>
  </div>

  </div>
  <footer class="text-light" style="background-color: #0060B1;">
    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-4">
          <ul class="nav flex-column">
            <li class="nav-link text-decoration-none">
              <a href="index.php" class="text-decoration-none" style="color:white" ;>Retornar à Loja</a>
            </li>
            <li class="nav-link">
              <a href="#" class="text-decoration-none" style="color:white" ;>Sobre</a>
            </li>
            <li class="nav-link">
              <a href="#" class="text-decoration-none" style="color:white" ;>Contato</a>
            </li>
            <li class="nav-link">
              <a href="faleconosco.php" class="text-decoration-none" style="color:white" ;>Suporte</a>
            </li>
          </ul>
        </div>
        <div class="col-8">
          <p>
            O BOOM! é uma empresa brasileira, pelo grupo de TI do Senac Campo Grande. Desde o início, o foco da companhia é o comércio digital de produtos eletrônicos.
          </p>
        </div>
      </div>
    </div>
    <div class="text-center" style="background-color: #333; padding: 20px;">
      &copy Todos os direitos reservados a: Grupo 1
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>