<?php
include_once 'conexao.php';
$codigo = $_GET["id"];

$sql = "delete from carrinho where idconta = '".$codigo."';";

if(mysqli_query($con, $sql))
{
    $msg = "apagado com sucesso";
    header("location:../index.php");
}
else
{
    $msg = "algo deu ruim";
    header("location:../adm/carrinho.php?id=");
}

?>