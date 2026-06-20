<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/autor.php";


class Autor{

  public function Select(){

   $sql = "Select * from autor;";
   $con = Conexao::conectar();
   $registros = $con->query($sql);
   $con = Conexao::desconectar();
   $lstAutor = [];

   foreach($registros as $linha){
      $autor = new \MODEL\Autor();
      $autor->setId($linha['id']);
      $autor->setNacionalidade($linha['nacionalidade']);
      $autor->setNome($linha['nome']);

      $lstAutor[] = $autor;

   }
   return $lstAutor;
  }

  public function SelectById(int $id){

  $sql = "Select * from autor WHERE id=?;";
  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $query->execute(array($id));
  $linha =  $query->fetch(\PDO::FETCH_ASSOC);
  $con = Conexao::desconectar();

  if(!$linha){
    return null;
  }
   $autor = new \MODEL\Autor();
   $autor->setId($linha["id"]);
   $autor->setNacionalidade($linha['nacionalidade']);
   $autor->setNome($linha['nome']);

   return $autor;
  }

public function Insert(\MODEL\Autor $autor){
  $sql = "INSERT INTO  autor (nacionalidade, nome) VALUES (?, ?);";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$autor->getNacionalidade(), $autor->getNome()]);
  $con = Conexao::desconectar();


  return $result;
}

public function Update(\MODEL\Autor $autor){
  $sql = "UPDATE autor SET  nacionalidade = ?, nome = ? WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([ $autor->getNacionalidade(), $autor->getNome(), $autor->getId()]);
  $con = Conexao::desconectar();

  return $result;

}

public function Delete(int $id){
  $sql = "DELETE from autor WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$id]);
  $con = Conexao::desconectar();

  return $result;
}
}
