<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/leitor.php";


class Leitor{

  public function Select(){

   $sql = "Select * from leitor;";
   $con = Conexao::conectar();
   $registros = $con->query($sql);
   $con = Conexao::desconectar();
   $lstLeitor = [];

   foreach($registros as $linha){
      $leitor = new \MODEL\Leitor();
      $leitor->setId($linha['id']);
      $leitor->setEmail($linha['email']);
      $leitor->setNome($linha['nome']);
      $leitor->setCidade($linha['cidade']);
      $leitor->setTelefone($linha['telefone']);

      $lstLeitor[] = $leitor;

   }
   return $lstLeitor;
  }

  public function SelectById(int $id){

  $sql = "Select * from leitor WHERE id=?;";
  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $query->execute(array($id));
  $linha =  $query->fetch(\PDO::FETCH_ASSOC);
  $con = Conexao::desconectar();

  if(!$linha){
    return null;
  }
   $leitor = new \MODEL\Leitor();
   $leitor->setId($linha["id"]);
   $leitor->setEmail($linha['email']);
   $leitor->setNome($linha['nome']);
   $leitor->setTelefone($linha['telefone']);
   $leitor->setCidade($linha['cidade']);

   return $leitor;
  }

public function Insert(\MODEL\Leitor $leitor){
  $sql = "INSERT INTO  leitor (nome, email, telefone, cidade) VALUES (?, ?, ?, ?);";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$leitor->getNome(), $leitor->getEmail(), $leitor->getTelefone(), $leitor->getCidade()]);
  $con = Conexao::desconectar();


  return $result;
}

public function Update(\MODEL\Leitor $leitor){
  $sql = "UPDATE leitor SET  nome = ?, email = ?, telefone = ?, cidade = ? WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([ $leitor->getNome(), $leitor->getEmail(), $leitor->getTelefone(), $leitor->getCidade(), $leitor->getId()]);
  $con = Conexao::desconectar();

  return $result;

}

public function Delete(int $id){
  $sql = "DELETE from leitor WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$id]);
  $con = Conexao::desconectar();

  return $result;
}
}
