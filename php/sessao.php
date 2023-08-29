<?php 
session_start();

if(!isset($_SESSION["nome"])) {
    session_destroy();
    $msg = "sem conta";
    header("$msg");
}
elseif($_SESSION["tempo"] + 5*60 < time())
{
    $msg = "sessão expirou";
    header($msg);
}
else
{
    $_SESSION["tempo"] = time();
}


?>