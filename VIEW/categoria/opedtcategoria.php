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

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$descricao = $_POST['descricao'] ?? '';

if ($id <= 0) {
  header("Location: frmedtcategoria.php?id=0&erro=" . urlencode("ID inválido"));
  exit;
}

if (!validarVazio($descricao)) {
  header("Location: frmedtcategoria.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Insira uma descricao"));
  exit;
}

$categoria = new \MODEL\Categoria();
$categoria->setId($id);
$categoria->setDescricao(trim($descricao));

$dalCategoria = new \DAL\Categoria();
if (!$dalCategoria->Update($categoria)) {
  header("Location: frmedtcategoria.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Não foi possível atualizar a categoria"));
  exit;
}

header("Location: lstCategoria.php");
exit;
