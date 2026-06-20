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

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$cidade = $_POST['cidade'] ?? '';

if ($id <= 0) {
  header("Location: frmedtleitor.php?id=0&erro=" . urlencode("ID inválido"));
  exit;
}
if (!validarVazio($nome)) {
  header("Location: frmedtleitor.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Insira um nome"));
  exit;
}
if (!validarVazio($email)) {
  header("Location: frmedtleitor.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Insira um email"));
  exit;
}
if (!validarVazio($telefone)) {
  header("Location: frmedtleitor.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Insira um telefone"));
  exit;
}
if (!validarVazio($cidade)) {
  header("Location: frmedtleitor.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Insira uma cidade"));
  exit;
}

$leitor = new \MODEL\Leitor();
$leitor->setId($id);
$leitor->setNome(trim($nome));
$leitor->setEmail(trim($email));
$leitor->setTelefone(trim($telefone));
$leitor->setCidade(trim($cidade));

$dalLeitor = new \DAL\Leitor();
if (!$dalLeitor->Update($leitor)) {
  header("Location: frmedtleitor.php?id=" . urlencode((string)$id) . "&erro=" . urlencode("Não foi possível atualizar o leitor"));
  exit;
}

header("Location: lstLeitor.php");
exit;
