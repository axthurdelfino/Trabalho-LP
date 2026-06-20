<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/validacoes/validacoes.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: lstEmprestimo.php");
  exit;
}

$idLivro = isset($_POST['id_livro']) ? (int)$_POST['id_livro'] : 0;
$idLeitor = isset($_POST['id_leitor']) ? (int)$_POST['id_leitor'] : 0;
$dataEmprestimo = trim($_POST['data_emprestimo'] ?? '');
$dataPrevistaDevolucao = trim($_POST['data_prevista_devolucao'] ?? '');

if (($erro = validarEmprestimo($idLivro, $idLeitor, $dataEmprestimo, $dataPrevistaDevolucao)) !== null) {
  header("Location: frminsemprestimo.php?erro=" . urlencode($erro));
  exit;
}

$emprestimo = new \MODEL\Emprestimo();
$emprestimo->setIdLivro($idLivro);
$emprestimo->setIdLeitor($idLeitor);
$emprestimo->setDataEmprestimo($dataEmprestimo);
$emprestimo->setDataPrevistaDevolucao($dataPrevistaDevolucao);
$emprestimo->setDataDevolucao(null);
$emprestimo->setStatus('emprestado');

$dalEmprestimo = new \DAL\Emprestimo();
if (!$dalEmprestimo->Insert($emprestimo)) {
  header("Location: frminsemprestimo.php?erro=" . urlencode("Não foi possível realizar o empréstimo"));
  exit;
}

header("Location: lstEmprestimo.php");
exit;
