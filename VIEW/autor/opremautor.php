<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$dalAutor = new DAL\Autor();
$dalAutor->Delete($id);

header("Location: lstAutor.php");
exit;

?>
