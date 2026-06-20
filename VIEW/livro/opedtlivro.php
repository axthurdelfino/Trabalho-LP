<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/categoria.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/validacoes/validacoes.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: lstLivro.php");
  exit;
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$titulo = $_POST['titulo'] ?? '';
$idAutor = isset($_POST['id_autor']) ? (int)$_POST['id_autor'] : 0;
$idCategoria = isset($_POST['id_categoria']) ? (int)$_POST['id_categoria'] : 0;
$anoPublicacao = isset($_POST['ano_publicacao']) ? (int)$_POST['ano_publicacao'] : 0;
$quantidadeTotal = isset($_POST['quantidade_total']) ? (int)$_POST['quantidade_total'] : 0;
$quantidadeDisponivel = isset($_POST['quantidade_disponivel']) ? (int)$_POST['quantidade_disponivel'] : 0;

if ($id <= 0) {
  header("Location: frmedtlivro.php?id=0&erro=" . urlencode("ID inválido"));
  exit;
}
if (!validarVazio($titulo)) {
  header("Location: frmedtlivro.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Insira um titulo"));
  exit;
}
if ($idAutor <= 0 || $idCategoria <= 0 || $anoPublicacao <= 0) {
  header("Location: frmedtlivro.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Campos numéricos inválidos"));
  exit;
}

$dalAutor = new \DAL\Autor();
if (!$dalAutor->SelectById($idAutor)) {
  header("Location: frmedtlivro.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("ID do autor inexistente"));
  exit;
}

$dalCategoria = new \DAL\Categoria();
if (!$dalCategoria->SelectById($idCategoria)) {
  header("Location: frmedtlivro.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("ID da categoria inexistente"));
  exit;
}

if ($quantidadeTotal < 0 || $quantidadeDisponivel < 0 || $quantidadeDisponivel > $quantidadeTotal) {
  header("Location: frmedtlivro.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Quantidade inválida"));
  exit;
}

$livro = new \MODEL\Livro();
$livro->setId($id);
$livro->setTitulo(trim($titulo));
$livro->setIdAutor($idAutor);
$livro->setIdCategoria($idCategoria);
$livro->setAnoPublicacao($anoPublicacao);
$livro->setQuantidadeTotal($quantidadeTotal);
$livro->setQuantidadeDisponivel($quantidadeDisponivel);

$dalLivro = new \DAL\Livro();
if (!$dalLivro->Update($livro)) {
  header("Location: frmedtlivro.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Não foi possível atualizar o livro"));
  exit;
}

header("Location: lstLivro.php");
exit;
