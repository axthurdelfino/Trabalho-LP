<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/categoria.php";


class Categoria{

  public function Select(){

   $sql = "Select * from categoria;";
   $con = Conexao::conectar();
   $registros = $con->query($sql);
   $con = Conexao::desconectar();
   $lstCategoria = [];

   foreach($registros as $linha){
      $categoria = new \MODEL\Categoria();
      $categoria->setId($linha['id']);
      $categoria->setDescricao($linha['descricao']);


      $lstCategoria[] = $categoria;

   }
   return $lstCategoria;
  }

  public function SelectById(int $id){

  $sql = "Select * from categoria WHERE id=?;";
  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $query->execute([($id)]);
  $linha =  $query->fetch(\PDO::FETCH_ASSOC);
  $con = Conexao::desconectar();

  if(!$linha){
    return null;
  }
   $categoria = new \MODEL\Categoria();
   $categoria->setId($linha["id"]);
   $categoria->setDescricao($linha['descricao']);


   return $categoria;
  }

public function Insert(\MODEL\Categoria $categoria){
  $sql = "INSERT INTO categoria (descricao) VALUES (?);";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$categoria->getDescricao()]);
  $con = Conexao::desconectar();


  return $result;
}

public function Update(\MODEL\Categoria $categoria){
  $sql = "UPDATE categoria SET descricao = ? WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([ $categoria->getDescricao(), $categoria->getId()]);
  $con = Conexao::desconectar();

  return $result;

}

public function Delete(int $id){
  $sql = "DELETE from categoria WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$id]);
  $con = Conexao::desconectar();

  return $result;
}
}
