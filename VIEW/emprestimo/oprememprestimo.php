<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
  header("Location: lstEmprestimo.php?erro=" . urlencode("ID inválido."));
  exit;
}

$dalEmprestimo = new \DAL\Emprestimo();
try {
  if (!$dalEmprestimo->Delete($id)) {
    header("Location: lstEmprestimo.php?erro=" . urlencode("Empréstimo não encontrado."));
    exit;
  }
} catch (\Throwable $e) {
  header("Location: lstEmprestimo.php?erro=" . urlencode("Não foi possível remover o empréstimo."));
  exit;
}

header("Location: lstEmprestimo.php");
exit;

?>
