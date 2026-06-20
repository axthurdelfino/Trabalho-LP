<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/categoria.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/categoria.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/validacoes/validacoes.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: lstCategoria.php");
  exit;
}

$descricao = $_POST['descricao'] ?? '';

if (!validarVazio($descricao)) {
  header("Location: frminscategoria.php?erro=" . urlencode("Insira uma descricao"));
  exit;
}

$categoria = new \MODEL\Categoria();
$categoria->setDescricao(trim($descricao));

$dalCategoria = new \DAL\Categoria();
$dalCategoria->Insert($categoria);

header("Location: lstCategoria.php");
exit;
