<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$dalEmprestimo = new \DAL\Emprestimo();
$dalEmprestimo->Delete($id);

header("Location: lstEmprestimo.php");
exit;

?>
