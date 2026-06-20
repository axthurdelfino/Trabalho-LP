<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/validacoes/validacoes.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$autor = new MODEL\Autor;

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
if ($id <= 0) {
  header("Location: frmedtautor.php?id=0&erro=" . urlencode("ID inválido"));
  exit;
}

$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$nacionalidade = isset($_POST['nacionalidade']) ? trim($_POST['nacionalidade']) : '';
if (!validarVazio($nome)) {
  header("Location: frmedtautor.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Insira um nome"));
  exit;
}
if (!validarVazio($nacionalidade)) {
  header("Location: frmedtautor.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Insira uma nacionalidade"));
  exit;
}

$autor->setId($_POST['id']);
$autor->setNome($nome);
$autor->setNacionalidade($nacionalidade);

$dalAutor = new DAL\Autor;
if (!$dalAutor->Update($autor)) {
  header("Location: frmedtautor.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Não foi possível atualizar o autor"));
  exit;
}

header("location: lstAutor.php");

exit;

?>
