<?php
include_once 'conexao.php';
$codigo = $_GET["cod"];

$sql = "delete from carrinho where idcarrinho = '".$codigo."';";

if(mysqli_query($con, $sql))
{
    $msg = "apagado com sucesso";
    header("location:../carrinho.php?id=");
}
else
{
    $msg = "algo deu ruim";
    header("location:../adm/carrinho.php?id=");
}

?>