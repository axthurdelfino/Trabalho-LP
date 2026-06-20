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
	      self::$con = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbNome . ";charset=utf8mb4",  self::$dbUsuario , self::$dbSenha);
	      self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	      }

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
?>

