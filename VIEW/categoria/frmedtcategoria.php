<?php
$id = $_GET['id'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Categoria</title>
</head>
<body>
  <h1>Editar Categoria</h1>

  <form action="opedtcategoria.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars($id) ?>" required><br><br>

    <label for="descricao">Descricao:</label><br>
    <input type="text" id="descricao" name="descricao" maxlength="60" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstCategoria.php">Voltar</a></p>
</body>
</html>
