<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
  header("Location: lstEmprestimo.php?erro=" . urlencode("Requisição inválida."));
  exit;
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
  header("Location: lstEmprestimo.php?erro=" . urlencode("ID inválido."));
  exit;
}

$dalEmprestimo = new \DAL\Emprestimo();
try {
  if (!$dalEmprestimo->Devolver($id)) {
    header("Location: lstEmprestimo.php?erro=" . urlencode("Não foi possível realizar a devolução."));
    exit;
  }
} catch (\Throwable $e) {
  header("Location: lstEmprestimo.php?erro=" . urlencode("Não foi possível realizar a devolução."));
  exit;
}

header("Location: lstEmprestimo.php");
exit;
