<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/leitor.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$dalLeitor = new \DAL\Leitor();
$dalLeitor->Delete($id);

header("Location: lstLeitor.php");
exit;

?>
