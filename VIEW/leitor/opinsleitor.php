<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/leitor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/leitor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/validacoes/validacoes.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: lstLeitor.php");
  exit;
}

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$cidade = $_POST['cidade'] ?? '';

if (!validarVazio($nome)) {
  header("Location: frminsleitor.php?erro=" . urlencode("Insira um nome"));
  exit;
}
if (!validarVazio($email)) {
  header("Location: frminsleitor.php?erro=" . urlencode("Insira um email"));
  exit;
}
if (!validarVazio($telefone)) {
  header("Location: frminsleitor.php?erro=" . urlencode("Insira um telefone"));
  exit;
}
if (!validarVazio($cidade)) {
  header("Location: frminsleitor.php?erro=" . urlencode("Insira uma cidade"));
  exit;
}

$leitor = new \MODEL\Leitor();
$leitor->setNome(trim($nome));
$leitor->setEmail(trim($email));
$leitor->setTelefone(trim($telefone));
$leitor->setCidade(trim($cidade));

$dalLeitor = new \DAL\Leitor();
$dalLeitor->Insert($leitor);

header("Location: lstLeitor.php");
exit;
