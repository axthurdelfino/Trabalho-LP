<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/validacoes/validacoes.php";

$autor = new MODEL\Autor;

$autor->setId($_POST['id']);
$autor->setNome($_POST['nome']);
$autor->setNacionalidade($_POST['nacionalidade']);

$dalAutor = new DAL\Autor;
$dalAutor->Update($autor);

header("location: lstAutor.php");

exit;

?>
