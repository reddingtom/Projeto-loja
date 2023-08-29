<?php
include_once 'conexao.php';

$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$tipo = $_POST["tipo"];
$imagem = $_FILES['imagem'];

$extensao = explode(".", $imagem["name"]); //pega o nome do arquivo e tira os pontos
$extensao = array_reverse($extensao); //inverte o nome da foto
$extensao = strtolower ($extensao[0]);

if($extensao != "jpg" && $extensao != "jpeg" && $extensao != "gif" && $extensao != "png")
{
    $msg = "formato de img errado";
    header("location:../adm/adicionarproduto.php?msg=$msg");
}
elseif($imagem["size"] > 1024*500) //verifica se tamanho é menor q 500kb
{
    $msg = "imagem muito grande";
    header("location:../adm/adicionarproduto.php?msg=$msg");
}
else
{
    $nomeimg = date("YmdHis") . rand(1000, 9999) . "." . $extensao; //colocar nome no arquivo

    $sql = "insert into itens values (null,	'".$nome."', '".$quantidade."',	'".$preco."', '".$descricao."', '".$tipo."', '".$nomeimg."');";

if(mysqli_query($con, $sql))
{   ?>
    <script> alert("produto registrado"); </script> 
    <?php move_uploaded_file($imagem["tmp_name"], "../img/".$nomeimg); 
    header("location:../adm/consultarproduto.php");
    
}
else
{ ?>
    <script> alert("falha no registro"); </script>
    <?php
}
}



?>