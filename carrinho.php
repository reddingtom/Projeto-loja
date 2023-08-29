<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Carrinho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

    <style type="text/css">
        .bloc_left_price {
            color: #c01508;
            text-align: center;
            font-weight: bold;
            font-size: 150%;
        }

        .category_block li:hover {
            background-color: #007bff;
        }

        .category_block li:hover a {
            color: #ffffff;
        }

        .category_block li a {
            color: #343a40;
        }

        .add_to_cart_block .price {
            color: #c01508;
            text-align: center;
            font-weight: bold;
            font-size: 200%;
            margin-bottom: 0;
        }

        .add_to_cart_block .price_discounted {
            color: #343a40;
            text-align: center;
            text-decoration: line-through;
            font-size: 140%;
        }

        .product_rassurance {
            padding: 10px;
            margin-top: 15px;
            background: #ffffff;
            border: 1px solid #6c757d;
            color: #6c757d;
        }

        .product_rassurance .list-inline {
            margin-bottom: 0;
            text-transform: uppercase;
            text-align: center;
        }

        .product_rassurance .list-inline li:hover {
            color: #343a40;
        }

        .reviews_product .fa-star {
            color: gold;
        }

        .pagination {
            margin-top: 20px;
        }

        footer {
            background: #343a40;
            padding: 40px;
        }

        footer a {
            color: #f8f9fa !important
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <div class="container">


    </div>
    </div>
    </nav>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Carrinho</h1>
        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Produtos</th>
                                <th scope="col" class="text-right"></th>
                                <th scope="col" class="text-right"></th>
                                <th scope="col" class="text-right"></th>
                                <th scope="col" class="text-right">Preço</th>
                                <th scope="col" class="text-right">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sub = 0;
                          include_once 'php/conexao.php';

                          $sql2 = "select idcarrinho, itens.nome, carrinho.idconta, carrinho.idprod, itens.preco from carrinho inner join itens on carrinho.idprod = itens.idprod inner join conta on carrinho.idconta = conta.idconta;";
                          $result = mysqli_query($con, $sql2); 
                          while ($row = mysqli_fetch_array($result)) { ?>
                          <tr>
                            <td><?php echo $row["nome"]; ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">R$ <?php echo $row["preco"]; ?></td>
                            
                            <td class="text-right"><button class="btn btn-sm btn-danger">
                            <a href="php/deletarcoisanocar.php?cod=<?php echo $row["idcarrinho"]; ?>">  
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                              </button></a> </td>
                          </tr> <?php
                          $sub = $sub + $row["preco"];
                          }
                          ?>    
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sub-Total</td>
                                <td></td>
                                <td class="text-right">R$<?php echo $sub; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Transporte</td>
                                <td></td>
                                <td class="text-right">R$<?php $trans = 34; echo $trans;?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td></td>
                                <td class="text-right"><strong>R$<?php $total = $sub + $trans; echo $total;?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="index.php"><button class="btn btn-block btn-light">Voltar a Loja</button></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        
                        <a href="php/comprado.php?id=<?php echo $_SESSION["idconta"];?>" class="btn btn-lg btn-block btn-success text-uppercase">Comprar </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-light" style="background-color: #0060B1;">
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-4">
                    <ul class="nav flex-column">
                        <li class="nav-link"><a href="index.php" class="text-decoration-none" style="color:white"
                                ;>Retornar à Loja</a></li>
                        <li class="nav-link"><a href="#" class="text-decoration-none" style="color:white" ;>Sobre</a>
                        </li>
                        <li class="nav-link"><a href="#" class="text-decoration-none" style="color:white" ;>Contato</a>
                        </li>
                        <li class="nav-link"><a href="faleconosco.php" class="text-decoration-none" style="color:white"
                                ;>Suporte</a></li>
                    </ul>
                </div>
                <div class="col-8">
                    <p>
                        O BOOM! é uma empresa brasileira, pelo grupo de TI do Senac Campo Grande. Desde o início, o foco da companhia é o comércio digital de produtos eletrônicos.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="text-center" style="background-color: #333; padding: 20px; color:white">
        &copy Todos os direitos reservados a: Grupo 1
    </div>

</body>

</html>