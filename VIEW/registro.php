<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/usuario.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/usuario.php";

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$dalUsuario = new \DAL\Usuario();

if ($dalUsuario->SelectByLogin($login)) {

    echo "Login já existe!";
    exit();

}

$usuario = new \MODEL\Usuario();

$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setSenha($senha);

$result = $dalUsuario->Insert($usuario);

if ($result) {
    header("Location: index.php");
} else {
    echo "Erro ao cadastrar.";
}
