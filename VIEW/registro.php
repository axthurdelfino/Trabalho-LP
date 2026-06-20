<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/usuario.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/usuario.php";

$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$login = isset($_POST['login']) ? trim($_POST['login']) : '';
$senhaRaw = isset($_POST['senha']) ? $_POST['senha'] : '';

if ($nome === '' || $login === '' || $senhaRaw === '') {
    header("Location: cadastro.php?erro=vazio");
    exit;
}

$senha = md5($senhaRaw);

$dalUsuario = new \DAL\Usuario();

if ($dalUsuario->SelectByLogin($login)) {
    header("Location: cadastro.php?erro=login");
    exit;

}

$usuario = new \MODEL\Usuario();

$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setSenha($senha);

$result = $dalUsuario->Insert($usuario);

if ($result) {
    header("Location: index.php");
    exit;
} else {
    header("Location: cadastro.php?erro=cadastro");
    exit;
}
