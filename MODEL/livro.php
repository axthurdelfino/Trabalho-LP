<?php

namespace MODEL;

class Livro{

  private ?int $id;
  private ?string $titulo;
  private ?int $id_autor;
  private ?int $id_categoria;
  private ?int $ano_publicacao;
  private ?int $quantidade_total;
  private ?int $quantidade_disponivel;

  public function __construct(){}

  public function getId(){
    return $this->id;
  }
  public function getTitulo(){
    return $this->titulo;
  }
  public function getIdAutor(){
    return $this->id_autor;
  }
  public function getIdCategoria(){
    return $this->id_categoria;
  }
  public function getAnoPublicacao(){
    return $this->ano_publicacao;
  }
  public function getQuantidadeTotal(){
    return $this->quantidade_total;
  }
  public function getQuantidadeDisponivel(){
    return $this->quantidade_disponivel;
  }
  public function setId(int $id){
    $this->id = $id;
  }
  public function setTitulo(string $titulo){
    $this->titulo = $titulo;
  }
  public function setIdAutor(int $id_autor){
    $this->id_autor = $id_autor;
  }
  public function setIdCategoria(int $id_categoria){
    $this->id_categoria = $id_categoria;
  }
  public function setAnoPublicacao(int $ano_publicacao){
    $this->ano_publicacao = $ano_publicacao;
  }
  public function setQuantidadeTotal(int $quantidade_total){
    $this->quantidade_total = $quantidade_total;
  }
  public function setQuantidadeDisponivel(int $quantidade_disponivel){
    $this->quantidade_disponivel = $quantidade_disponivel;
  }
}
?>
