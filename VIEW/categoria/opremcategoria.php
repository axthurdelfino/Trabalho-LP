<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/categoria.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$dalCategoria = new \DAL\Categoria();
$dalCategoria->Delete($id);

header("Location: lstCategoria.php");
exit;

?>
