<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/livro.php";


class Livro{

  public function Select(){

   $sql = "Select * from livro;";
   $con = Conexao::conectar();
   $registros = $con->query($sql);
   $con = Conexao::desconectar();
   $lstLivro = [];

   foreach($registros as $linha){
      $livro = new \MODEL\Livro();
      $livro->setId($linha['id']);
      $livro->setTitulo($linha['titulo']);
      $livro->setIdAutor($linha['id_autor']);
      $livro->setidCategoria($linha['id_categoria']);
      $livro->setAnoPublicacao($linha['ano_publicacao']);
      $livro->setQuantidadeTotal($linha['quantidade_total']);
      $livro->setQuantidadeDisponivel($linha['quantidade_disponivel']);

      $lstLivro[] = $livro;

   }
   return $lstLivro;
  }

  public function SelectById(int $id){

  $sql = "Select * from livro WHERE id=?;";
  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $query->execute(array($id));
  $linha =  $query->fetch(\PDO::FETCH_ASSOC);
  $con = Conexao::desconectar();

  if(!$linha){
    return null;
  }
   $livro = new \MODEL\Livro();
   $livro->setId($linha["id"]);
   $livro->setTitulo($linha['titulo']);
   $livro->setIdAutor($linha['id_autor']);
   $livro->setIdCategoria($linha['id_categoria']);
   $livro->setAnoPublicacao($linha['ano_publicacao']);
   $livro->setQuantidadeTotal($linha['quantidade_total']);
   $livro->setQuantidadeDisponivel($linha['quantidade_disponivel']);

   return $livro;
  }

public function Insert(\MODEL\Livro $livro){
  $sql = "INSERT INTO  livro (titulo, id_autor, id_categoria, ano_publicacao, quantidade_total, quantidade_disponivel) VALUES (?, ?, ?, ?, ?, ?);";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$livro->getTitulo(), $livro->getIdAutor(), $livro->getIdCategoria(), $livro->getAnoPublicacao(), $livro->getQuantidadeTotal(), $livro->getQuantidadeDisponivel()]);
  $con = Conexao::desconectar();


  return $result;
}

public function Update(\MODEL\Livro $livro){
  $sql = "UPDATE livro SET  titulo = ?, id_autor = ?, id_categoria = ?, ano_publicacao = ?, quantidade_total = ?, quantidade_disponivel = ? WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$livro->getTitulo(), $livro->getIdAutor(), $livro->getIdCategoria(), $livro->getAnoPublicacao(), $livro->getQuantidadeTotal(), $livro->getQuantidadeDisponivel(), $livro->getId()]);
  $con = Conexao::desconectar();

  return $result;

}

public function Delete(int $id){
  $sql = "DELETE from livro WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$id]);
  $con = Conexao::desconectar();

  return $result;
}
}
