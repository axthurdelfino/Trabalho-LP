<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/categoria.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
  header("Location: lstCategoria.php?erro=" . urlencode("ID inválido."));
  exit;
}

$dalCategoria = new \DAL\Categoria();
try {
  if (!$dalCategoria->Delete($id)) {
    header("Location: lstCategoria.php?erro=" . urlencode("Categoria não encontrada."));
    exit;
  }
} catch (\Throwable $e) {
  header("Location: lstCategoria.php?erro=" . urlencode("Não foi possível remover a categoria. Verifique vínculos com livros."));
  exit;
}

header("Location: lstCategoria.php");
exit;

?>
