<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
  header("Location: lstAutor.php?erro=" . urlencode("ID inválido."));
  exit;
}

$dalAutor = new DAL\Autor();
try {
  if (!$dalAutor->Delete($id)) {
    header("Location: lstAutor.php?erro=" . urlencode("Autor não encontrado."));
    exit;
  }
} catch (\Throwable $e) {
  header("Location: lstAutor.php?erro=" . urlencode("Não foi possível remover o autor. Verifique vínculos em livros."));
  exit;
}

header("Location: lstAutor.php");
exit;

?>
