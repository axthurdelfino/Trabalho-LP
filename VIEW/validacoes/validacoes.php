<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/leitor.php";

function validarVazio($value){
  if(empty(trim($value))){
    return false;
  }
  else{
    return true;
      }
}

function validarEmprestimo($idLivro, $idLeitor, $dataEmprestimo, $dataPrevistaDevolucao)
{
  if ((int)$idLivro <= 0) {
    return "Informe um livro válido";
  }

  if ((int)$idLeitor <= 0) {
    return "Informe um leitor válido";
  }

  if (!validarVazio($dataEmprestimo) || !validarVazio($dataPrevistaDevolucao)) {
    return "Informe as datas";
  }

  $dataEmprestimo = trim($dataEmprestimo);
  $dataPrevistaDevolucao = trim($dataPrevistaDevolucao);

  $dataObjEmprestimo = \DateTime::createFromFormat('Y-m-d', $dataEmprestimo);
  $dataObjPrevista = \DateTime::createFromFormat('Y-m-d', $dataPrevistaDevolucao);

  if (
    !$dataObjEmprestimo || !$dataObjPrevista ||
    $dataObjEmprestimo->format('Y-m-d') !== $dataEmprestimo ||
    $dataObjPrevista->format('Y-m-d') !== $dataPrevistaDevolucao
  ) {
    return "Datas inválidas";
  }

  if ($dataObjPrevista < $dataObjEmprestimo) {
    return "A data prevista deve ser igual ou posterior ao empréstimo";
  }

  $dalLivro = new \DAL\Livro();
  $livro = $dalLivro->SelectById((int)$idLivro);

  if (!$livro) {
    return "Livro não encontrado";
  }

  $dalLeitor = new \DAL\Leitor();
  $leitor = $dalLeitor->SelectById((int)$idLeitor);

  if (!$leitor) {
    return "Leitor não encontrado";
  }

  if ((int)$livro->getQuantidadeDisponivel() <= 0) {
    return "Livro sem exemplares disponíveis";
  }

  return null;
}
?>
