<?php

namespace MODEL;

class Autor{

  private ?int $id;
  private ?string $nome;
  private ?string $nacionalidade;

  public function __construct(){}

  public function getId(){
    return $this->id;
  }
  public function getNome(){
   return $this->nome;
  }
  public function getNacionalidade(){
    return $this->nacionalidade;
  }
  public function setId(int $id){
    $this->id = $id;
  }
  public function setNome(string $nome){
    $this->nome = $nome;
  }
  public function setNacionalidade(string $nacionalidade){
    $this->nacionalidade = $nacionalidade;
  }
}
