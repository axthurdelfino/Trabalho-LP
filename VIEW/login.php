<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/usuario.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/usuario.php";

$login = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if ($login === '' || $senha === '') {
    header("Location: index.php?erro=vazio");
    exit;
}


$dalUsuario = new \DAL\Usuario();
$usuario = $dalUsuario->SelectByLogin($login);

if(!$usuario){ // chequa se usuario existe caso nao exista da erro.
    header("Location: index.php?erro=login");
    exit;
}

$hash = md5($senha);


if ($hash == $usuario->getSenha()) {
    session_start();
    $_SESSION['usuario'] = $login;
    //$_SESSION['nivel'] = $linha['nivel'];
    header("location:home.php");
    exit;
}
else header("location:index.php?erro=login");
exit;


?>
