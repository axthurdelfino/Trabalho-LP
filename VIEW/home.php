<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>Bem-vindo <?php echo htmlspecialchars($_SESSION["usuario"]); ?></h1>

  <p>
    <a href="listas.php">
      <button type="button">Gerenciar</button>
    </a>
  </p>

  <p>
    <a href="logout.php">Sair</a>
  </p>
</body>
</html>
