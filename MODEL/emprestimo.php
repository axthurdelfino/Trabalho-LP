<?php

namespace MODEL;

class Emprestimo{

  private ?int $id;
  private ?int $id_livro;
  private ?int $id_leitor;
  private ?string $data_emprestimo;
  private ?string $data_prevista_devolucao;
  private ?string $data_devolucao;
  private ?string $status;

  public function __construct(){}

  public function getId(){
    return $this->id;
  }
  public function getIdLivro(){
    return $this->id_livro;
  }
  public function getIdLeitor(){
    return $this->id_leitor;
  }
  public function getDataEmprestimo(){
    return $this->data_emprestimo;
  }
  public function getDataPrevistaDevolucao(){
    return $this->data_prevista_devolucao;
  }
  public function getDataDevolucao(){
    return $this->data_devolucao;
  }
  public function getStatus(){
    return $this->status;
  }
  public function setId(int $id){
    $this->id = $id;
  }
  public function setIdLivro(int $id_livro){
    $this->id_livro = $id_livro;
  }
  public function setIdLeitor(int $id_leitor){
    $this->id_leitor = $id_leitor;
  }
  public function setDataEmprestimo(string $data_emprestimo){
    $this->data_emprestimo = $data_emprestimo;
  }
  public function setDataPrevistaDevolucao(string $data_prevista_devolucao){
    $this->data_prevista_devolucao = $data_prevista_devolucao;
  }
  public function setDataDevolucao(?string $data_devolucao){
    $this->data_devolucao = $data_devolucao;
  }
  public function setStatus(string $status){
    $this->status = $status;
  }
}
?>
