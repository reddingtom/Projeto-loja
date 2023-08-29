<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pagina 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    body {
      font-family: 'open sans';
      overflow-x: hidden;
    }

    img {
      max-width: 100%;
    }

    .preview {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    @media screen and (max-width: 996px) {
      .preview {
        margin-bottom: 20px;
      }
    }

    .preview-pic {
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
      border: none;
      margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
      width: 18%;
      margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block;
    }

    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0;
    }

    .tab-content {
      overflow: hidden;
    }

    .tab-content img {
      width: 100%;
      -webkit-animation-name: opacity;
      animation-name: opacity;
      -webkit-animation-duration: .3s;
      animation-duration: .3s;
    }

    .card {
      background: #eee;
      padding: 3em;
      line-height: 1.5em;
    }

    .vasco {
      border: 1px solid black;

    }

    @media screen and (min-width: 997px) {
      .wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }
    }

    .details {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .colors {
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
      text-transform: UPPERCASE;
      font-weight: bold;
    }

    .checked,
    .price span {
      color: #ff9f1a;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
      margin-bottom: 15px;
    }

    .product-title {
      margin-top: 0;
    }

    .size {
      margin-right: 10px;
    }

    .size:first-of-type {
      margin-left: 40px;
    }

    .color {
      display: inline-block;
      vertical-align: middle;
      margin-right: 10px;
      height: 2em;
      width: 2em;
      border-radius: 2px;
    }

    .color:first-of-type {
      margin-left: 20px;
    }

    .add-to-cart,
    .like {
      background: #ff9f1a;
      padding: 1.2em 1.5em;
      border: none;
      text-transform: UPPERCASE;
      font-weight: bold;
      color: #fff;
      -webkit-transition: background .3s ease;
      transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {
      background: #b36800;
      color: #fff;
    }

    .not-available {
      text-align: center;
      line-height: 2em;
    }

    .not-available:before {
      font-family: fontawesome;
      content: "\f00d";
      color: #fff;
    }

    .orange {
      background: #ff9f1a;
    }

    .green {
      background: #85ad00;
    }

    .blue {
      background: #0076ad;
    }

    .tooltip-inner {
      padding: 1.3em;
    }

    @-webkit-keyframes opacity {
      0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3);
      }

      100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes opacity {
      0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3);
      }

      100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }
  </style>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  </head>

  <body>
    <?php include_once 'php/conexao.php';  ?>
    <nav class="navbar navbar-expand-lg" style="background-color: #0060B1;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="IMG/SonicBoom_logo.png" alt="Boom" width="65" height="50">
        </a>
        <a class="navbar-brand" href="index.php">
          <strong>Pagina Inicial</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

          </ul>
          <a href="carrinho.html" class="text-decoration-none" style="color: white ;"><svg
              xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart"
              viewBox="0 0 16 16">
              <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg></a>
          </svg>
        </div>
      </div>
    </nav>
    <?php 
    $idprod = $_GET["id"];
    $sql = "select imagem, nome, descricao, preco, idprod from itens where idprod = '".$idprod."';";
    $result = mysqli_query($con, $sql); 
    if(mysqli_num_rows($result) == 1)
{

    $row = mysqli_fetch_array($result);

    $nome = $row["nome"];
    $imagem = $row["imagem"];
    $descricao = $row["descricao"];
    $preco = $row["preco"];
    
    }

    ?>
    <div class="container" style="padding: 5%;">
      <div class="card" style="box-shadow: -7px 5px 13px 1px #00000010;">
        <div class="container-fluid">
          <div class="wrapper row">
            <div class="preview col-md-6">

              <div class="preview-pic tab-content">
                <div class="tab-pane active" id="pic-1"><img src="img/<?php echo $imagem; ?>" /></div>
              </div>

            </div>
            <div class="details col-md-6">
              <h3 class="product-title" id="nome"> <?php echo $nome; ?></h3>
              
              <p class="product-description"> <?php echo $descricao; ?></p>
              <h4 class="price">current price: <span>R$ <?php echo $preco; ?> </span></h4>
              

              <div class="action">
              <a href="carrinho.php?id=<?php echo $idprod; ?>" class="btn btn-primary" style="background-color: #FF6500;">Adicionar ao Carrinho</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>

  
</body>
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
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sed necessitatibus id asperiores iste fugiat,
          praesentium
          obcaecati explicabo consequatur voluptatem eos earum blanditiis dolorem eaque veritatis libero? Magni, nam
          fugiat.
        </p>
      </div>
    </div>
  </div>
  <div class="text-center" style="background-color: #333; padding: 20px;">
    &copy Todos os direitos reservados a: Grupo 1
  </div>
</footer>

<script src="JS/app.js"></script>
<script src="JS/products.js"></script>


</body>

</html>