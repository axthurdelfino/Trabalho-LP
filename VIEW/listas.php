<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar CRUDS</title>
</head>
<body>
  <h1>Gerenciar CRUDS</h1>

  <ul>
    <li><a href="autor/lstAutor.php">Autores</a></li>
    <li><a href="categoria/lstCategoria.php">Categorias</a></li>
    <li><a href="leitor/lstLeitor.php">Leitores</a></li>
    <li><a href="livro/lstLivro.php">Livros</a></li>
    <li><a href="emprestimo/lstEmprestimo.php">Empréstimos</a></li>
  </ul>

  <p><a href="home.php">Voltar</a></p>
</body>
</html>
