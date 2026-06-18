<?php

namespace MODEL;

class Leitor{

  private ?int $id;
  private ?string $nome;
  private ?string $email;
  private ?string $telefone;
  private ?string $cidade;

  public function __construct(){}

  public function getId(){
    return $this->id;
  }
  public function getNome(){
    return $this->nome;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getTelefone(){
    return $this->telefone;
  }
  public function getCidade(){
    return $this->cidade;
  }
  public function setId(int $id){
    $this->id = $id;
  }
  public function setNome(string $nome){
    $this->nome = $nome;
  }
  public function setEmail(string $email){
    $this->email = $email;
  }
  public function setTelefone(string $telefone){
    $this->telefone = $telefone;
  }
  public function setCidade(string $cidade){
    $this->cidade = $cidade;
  }
}
?>
