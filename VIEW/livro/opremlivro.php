<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
  header("Location: lstLivro.php?erro=" . urlencode("ID inválido."));
  exit;
}

$dalLivro = new \DAL\Livro();
try {
  if (!$dalLivro->Delete($id)) {
    header("Location: lstLivro.php?erro=" . urlencode("Livro não encontrado."));
    exit;
  }
} catch (\Throwable $e) {
  header("Location: lstLivro.php?erro=" . urlencode("Não foi possível remover o livro. Verifique vínculos com empréstimos."));
  exit;
}

header("Location: lstLivro.php");
exit;

?>
