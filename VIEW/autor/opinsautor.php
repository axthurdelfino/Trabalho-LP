<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/validacoes/validacoes.php";

 if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
   header("location: lstAutor.php");
  }

if(!validarVazio($_POST['nome'])){
  echo "Insira um Nome";
  exit;
}
if(!validarVazio($_POST['nacionalidade'])){
  echo "Insira uma Nacionalidade";
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
