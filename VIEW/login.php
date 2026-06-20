<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/usuario.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "<bibliotecasv/MODEL/usuario.php";

$login = $_POST['usuario'];
$senha = $_POST['senha'];

$hash = md5($senha);

$dalUsuario = new \DAL\Usuario();
$usuario = $dalUsuario->SelectByLogin($login);


if ($hash == $usuario->getSenha()) {
    session_start();
    $_SESSION['login'] = $login;
    //$_SESSION['nivel'] = $linha['nivel'];
    header("location:home.php");
}
else header("location:index.php");


?>
