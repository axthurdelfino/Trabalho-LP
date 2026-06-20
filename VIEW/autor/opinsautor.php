<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/validacoes/validacoes.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
   header("location: lstAutor.php");
   exit;
  }

if(!validarVazio($_POST['nome'])){
  header("Location: frminsautor.php?erro=" . urlencode("Insira um nome"));
  exit;
}
if(!validarVazio($_POST['nacionalidade'])){
  header("Location: frminsautor.php?erro=" . urlencode("Insira uma nacionalidade"));
  exit;
}
$autor = new MODEL\Autor;

$autor->setNome($_POST['nome']);
$autor->setNacionalidade($_POST['nacionalidade']);

$dalAutor = new DAL\Autor;
$dalAutor->Insert($autor);

  header("location: lstAutor.php");

  exit;

?>
