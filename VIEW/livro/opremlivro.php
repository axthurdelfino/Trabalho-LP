<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/livro.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$dalLivro = new \DAL\Livro();
$dalLivro->Delete($id);

header("Location: lstLivro.php");
exit;

?>
