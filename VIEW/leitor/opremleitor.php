<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/leitor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
  header("Location: lstLeitor.php?erro=" . urlencode("ID inválido."));
  exit;
}

$dalLeitor = new \DAL\Leitor();
try {
  if (!$dalLeitor->Delete($id)) {
    header("Location: lstLeitor.php?erro=" . urlencode("Leitor não encontrado."));
    exit;
  }
} catch (\Throwable $e) {
  header("Location: lstLeitor.php?erro=" . urlencode("Não foi possível remover o leitor. Verifique vínculos com empréstimos."));
  exit;
}

header("Location: lstLeitor.php");
exit;

?>
