<?php 
// inclui os determinados arquivos
include_once 'conexao.php';


// pega os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];
$endereco2 = $_POST["endereco2"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];

//usa função no funcoes.php


$sql = "insert into conta values (null, '".$nome."', '".$email."', '".$senha."', '".$sexo."', '".$endereco."', '".$endereco2."', '".$cidade."', '".$estado."', '".$cep."', null)";


// faz o registro dos dados
if(mysqli_query($con, $sql))
{
    echo "Gravado com sucesso";
    header("location:../login.php?msg=");
}
else 
{
    echo "Erro ao gravar";
}

// fecha a conexão com o banco
mysqli_close($con);

?>