<?php 

$cod = $_POST["cod"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$tipo = $_POST["tipo"];
$quantidade = $_POST["quantidade"];

include_once 'conexao.php';

$sql = "select imagem from itens where idprod = '".$cod."';";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
$imagem = $row["imagem"];

$sql2 = "update itens set imagem = '".$imagem."', nome = '".$nome."', descricao = '".$descricao."', preco = '".$preco."', tipo = '".$tipo."', quantidade = '".$quantidade."' where idprod = '".$cod."'; ";

if(mysqli_query($con, $sql2))
{
    $msg = "funcionou";
    header("location:../adm/editarproduto.php?msg=$msg");
}
else
{
    $msg = "error";
    header("location:../adm/editarproduto.php?msg=$msg");
}

?>