<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/MODEL/usuario.php";

class Usuario{

 public function SelectByLogin(string $login){

 $sql = "Select * from usuario WHERE login=?;";
 $con = Conexao::Conectar();
 $query = $con->prepare($sql);
 $query->execute([($login)]);
 $result = $query->fetch(\PDO::FETCH_ASSOC);
 $con = Conexao::desconectar();

 if(!$result){
  return null;
 }
 $usuario = new \MODEL\Usuario();
 $usuario->setId($result['id']);
 $usuario->setLogin($result['login']);
 $usuario->setSenha($result['senha']);
 $usuario->setNome($result['nome']);

 return $usuario;
 }

     public function Insert(\MODEL\Usuario $usuario){

        $sql = "INSERT INTO usuario (login, senha, nome)
                VALUES (?, ?, ?);";

        $con = Conexao::conectar();

        $query = $con->prepare($sql);

        $result = $query->execute([$usuario->getLogin(),$usuario->getSenha(), $usuario->getNome()]);

        $con = Conexao::desconectar();

        return $result;
    }

}
