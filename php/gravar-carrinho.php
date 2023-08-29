<?php 

include_once 'conexao.php';
include_once 'sessao.php';
$conta = $_SESSION["idconta"];
$item = $_GET["id"];

$sql = "insert into carrinho values (null, '" . $item . "', '" . $conta . "');";

if (!empty($item)) {
    if (mysqli_query($con, $sql)) {
        $msg = "Adicionado ao carrinho";
        header("location:../index.php?pesq=");
    }
}

?>