<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inserir Categoria</title>
</head>
<body>
  <h1>Inserir Categoria</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opinscategoria.php" method="post">
    <label for="descricao">Descricao:</label><br>
    <input type="text" id="descricao" name="descricao" maxlength="60" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstCategoria.php">Voltar</a></p>
</body>
</html>
