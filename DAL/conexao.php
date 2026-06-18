<?php
 namespace DAL;

 use PDO;

 class Conexao{
    private static $dbNome = 'biblioteca';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';

    private static $con = null; // conexao comeca como nao feita *nula*

    public static function conectar(){
     if(self::$con == null){ // se conexao for nula criamos uma nova (new PDO)
      try{
      self::$con = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbNome,  self::$dbUsuario , self::$dbSenha); }

      catch(\PDOException $exception){
      die($exception->getMessage());
     }
    }
    return self::$con;
 }
 public static function desconectar(){
  self::$con = null; // caso chame a funcao desconectar setamos $con pra nulo (sem conexacao)
  return self::$con;
 }
 }
 /*
Basicamente criamos os atributos da classe que iremos usar de parametro no PDO, depois disso setamos a conexao($con) como inexistente ate o momento. Apos isso criamos a funcao "conectar" que ao ser chamada verifica se a conexao é nula, caso seja ela tenta(try) criar uma nova conexao (new PDO) caso ela nao consiga a conexao morre(die) e pega a mensagem de exececao($exception->getMessage() ) retornamos self::$con somente se a conexao for criada com sucesso. se der erro o catch executa o die() e mostra a mensagem de excecao, parando o codigo.


Depois disso criamos desconectar aonde basicamente só setamos conexao como nulo e a retornamos. (desconecta)

o que é a mensagem exception mostra:
  O que acontece:

  1. O new PDO(...) tenta conectar no MySQL.
  2. Se der erro, o PHP pula para o catch.
  3. O erro fica guardado na variável $exception.
  4. O método:

  $exception->getMessage()

  pega o texto do erro.
  5. O die(...) mostra esse texto na tela e para o programa.

  Exemplo: se o banco biblioteca não existir, pode aparecer no navegador algo como:

  SQLSTATE[HY000] [1049] Unknown database 'biblioteca'

  Se a senha estiver errada, algo como:

  SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost'
*/

?>


