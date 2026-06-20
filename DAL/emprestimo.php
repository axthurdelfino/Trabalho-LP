<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/emprestimo.php";


class Emprestimo{

  public function Select(){

   $sql = "Select * from emprestimo;";
   $con = Conexao::conectar();
   $registros = $con->query($sql);
   $con = Conexao::desconectar();
   $lstEmprestimo = [];

   foreach($registros as $linha){
     $emprestimo = new \MODEL\Emprestimo();
     $emprestimo->setId($linha['id']);
     $emprestimo->setIdLivro($linha['id_livro']);
     $emprestimo->setIdLeitor($linha['id_leitor']);
     $emprestimo->setDataEmprestimo($linha['data_emprestimo']);
     $emprestimo->setDataPrevistaDevolucao($linha['data_prevista_devolucao']);
     $emprestimo->setDataDevolucao($linha['data_devolucao']);
     $emprestimo->setStatus($linha['status']);


     $lstEmprestimo[] = $emprestimo;

   }
   return $lstEmprestimo;
  }

  public function SelectById(int $id){

  $sql = "Select * from emprestimo WHERE id=?;";
  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $query->execute(array($id));
  $linha =  $query->fetch(\PDO::FETCH_ASSOC);
  $con = Conexao::desconectar();

  if(!$linha){
    return null;
  }
    $emprestimo = new \MODEL\Emprestimo();
     $emprestimo->setId($linha['id']);
     $emprestimo->setIdLivro($linha['id_livro']);
     $emprestimo->setIdLeitor($linha['id_leitor']);
     $emprestimo->setDataEmprestimo($linha['data_emprestimo']);
     $emprestimo->setDataPrevistaDevolucao($linha['data_prevista_devolucao']);
     $emprestimo->setDataDevolucao($linha['data_devolucao']);
     $emprestimo->setStatus($linha['status']);


   return $emprestimo;
  }

  public function SelectDetalhe(int $id){
    $sql = "SELECT e.id AS emprestimo_id, e.data_emprestimo, e.data_prevista_devolucao,
              e.data_devolucao,
              e.status,
              l.id AS livro_id,
              l.titulo,
              l.ano_publicacao,
              l.quantidade_total,
              l.quantidade_disponivel,
              a.id AS autor_id,
              a.nome AS autor_nome,
              a.nacionalidade AS autor_nacionalidade,
              c.id AS categoria_id,
              c.descricao AS categoria_descricao,
              r.id AS leitor_id,
              r.nome AS leitor_nome,
              r.email AS leitor_email,
              r.telefone AS leitor_telefone,
              r.cidade AS leitor_cidade
            FROM emprestimo e
            INNER JOIN livro l ON l.id = e.id_livro
            INNER JOIN autor a ON a.id = l.id_autor
            INNER JOIN categoria c ON c.id = l.id_categoria
            INNER JOIN leitor r ON r.id = e.id_leitor
            WHERE e.id = ?;";

    $con = Conexao::conectar();
    $query = $con->prepare($sql);
    $query->execute([$id]);
    $linha = $query->fetch(\PDO::FETCH_ASSOC);
    Conexao::desconectar();

    if(!$linha){
      return null;
    }

    return $linha;
  }

public function Insert(\MODEL\Emprestimo $emprestimo){
  $con = Conexao::conectar();

  try {
    $con->beginTransaction();

    $sql = "SELECT quantidade_disponivel
            FROM livro
            WHERE id = ?
            FOR UPDATE;";
    $query = $con->prepare($sql);
    $query->execute([$emprestimo->getIdLivro()]);
    $livro = $query->fetch(\PDO::FETCH_ASSOC);

    if (!$livro || (int)$livro['quantidade_disponivel'] <= 0) {
      $con->rollBack();
      return false;
    }

    $sql = "INSERT INTO emprestimo
            (id_livro, id_leitor, data_emprestimo, data_prevista_devolucao, data_devolucao, status)
            VALUES (?, ?, ?, ?, ?, ?);";
    $query = $con->prepare($sql);
    $query->execute([
      $emprestimo->getIdLivro(),
      $emprestimo->getIdLeitor(),
      $emprestimo->getDataEmprestimo(),
      $emprestimo->getDataPrevistaDevolucao(),
      $emprestimo->getDataDevolucao(),
      $emprestimo->getStatus()
    ]);

    $sql = "UPDATE livro
            SET quantidade_disponivel = quantidade_disponivel - 1
            WHERE id = ?;";
    $query = $con->prepare($sql);
    $query->execute([$emprestimo->getIdLivro()]);

    $con->commit();
    return true;
  } catch (\Throwable $e) {
    if ($con->inTransaction()) {
      $con->rollBack();
    }
    throw $e;
  } finally {
    Conexao::desconectar();
  }
}

public function Update(\MODEL\Emprestimo $emprestimo){
  $sql = "UPDATE emprestimo SET id_livro = ?, id_leitor = ?, data_emprestimo = ?, data_prevista_devolucao = ?, data_devolucao = ?, status = ? WHERE id = ?;";

  $con = Conexao::conectar();
  $query = $con->prepare($sql);
  $result = $query->execute([$emprestimo->getIdLivro(), $emprestimo->getIdLeitor(), $emprestimo->getDataEmprestimo(), $emprestimo->getDataPrevistaDevolucao(), $emprestimo->getDataDevolucao(), $emprestimo->getStatus(), $emprestimo->getId()]);
  $con = Conexao::desconectar();

  return $result;

}

public function Delete(int $id){
  $con = Conexao::conectar();
  try {
    $con->beginTransaction();

    $sql = "SELECT id_livro, status
            FROM emprestimo
            WHERE id = ?
            FOR UPDATE;";
    $query = $con->prepare($sql);
    $query->execute([$id]);
    $emprestimo = $query->fetch(\PDO::FETCH_ASSOC);

    if (!$emprestimo) {
      $con->rollBack();
      return false;
    }

    if ($emprestimo['status'] === 'emprestado') {
      $sql = "UPDATE livro
              SET quantidade_disponivel = quantidade_disponivel + 1
              WHERE id = ?;";
      $query = $con->prepare($sql);
      $query->execute([$emprestimo['id_livro']]);
    }

    $sql = "DELETE FROM emprestimo WHERE id = ?;";
    $query = $con->prepare($sql);
    $query->execute([$id]);

    $con->commit();
    return true;
  } catch (\Throwable $e) {
    if ($con->inTransaction()) {
      $con->rollBack();
    }
    throw $e;
  } finally {
    Conexao::desconectar();
  }
}
public function Devolver(int $id){
    $con = Conexao::conectar();

    try{
      $con->beginTransaction();

      $sql = "SELECT id_livro, status
              FROM emprestimo
              WHERE id = ?;";
      $query = $con->prepare($sql);
      $query->execute([$id]);
      $emprestimo = $query->fetch(\PDO::FETCH_ASSOC);

      if(!$emprestimo){
        $con->rollBack();
        return false;
      }

      if($emprestimo['status'] === 'devolvido'){
        $con->rollBack();
        return false;
      }

      $sql = "UPDATE emprestimo
              SET data_devolucao = CURDATE(),
                  status = 'devolvido'
              WHERE id = ?;";
      $query = $con->prepare($sql);
      $query->execute([$id]);

      $sql = "UPDATE livro
              SET quantidade_disponivel = quantidade_disponivel + 1
              WHERE id = ?;";
      $query = $con->prepare($sql);
      $query->execute([$emprestimo['id_livro']]);

      $con->commit();
      return true;

    }catch(\PDOException $e){
      if($con->inTransaction()){
        $con->rollBack();
      }
      throw $e;
    }finally{
      Conexao::desconectar();
    }
  }
}
