<?php
session_start();
include_once 'conexao.php';

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$sql = "select nome,senha,idcargo, idconta from conta where nome = '".$nome."' and senha = '".$senha."';";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1)
{

    $row = mysqli_fetch_array($result);

    $_SESSION["nome"] = $row["nome"];
    $_SESSION["idcargo"] = $row["idcargo"];
    $_SESSION["idconta"] = $row["idconta"];
    $_SESSION["tempo"] = time();

    $msg = "logado com sucesso";
    header("location:../index.php");
}
else
{
    session_destroy();
    $msg = "usuário ou senha inválidos";
    header("location:../login.php?msg= $msg");
}

mysqli_close($con);

?>