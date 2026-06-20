<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inserir Autor</title>
</head>
<body>
  <h1>Inserir Autor</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opinsautor.php" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" required><br><br>

    <label for="nacionalidade">Nacionalidade:</label><br>
    <input type="text" id="nacionalidade" name="nacionalidade" maxlength="50" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstAutor.php">Voltar</a></p>
</body>
</html>
