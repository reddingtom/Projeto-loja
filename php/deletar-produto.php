<?php
include_once 'conexao.php';
$codigo = $_GET["cod"];

$sql = "delete from itens where idprod = '".$codigo."';";

if(mysqli_query($con, $sql))
{
    $msg = "apagado com sucesso";
    header("location:../adm/consultarproduto.php?msg=$msg");
}
else
{
    $msg = "algo deu ruim";
    header("location:../adm/consultarproduto.php?msg=$msg");
}

?>