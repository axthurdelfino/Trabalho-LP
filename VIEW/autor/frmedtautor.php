<?php
$id = $_GET['id'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Autor</title>
</head>
<body>
  <h1>Editar Autor</h1>

  <form action="opedtautor.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars($id) ?>" required><br><br>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" required><br><br>

    <label for="nacionalidade">Nacionalidade:</label><br>
    <input type="text" id="nacionalidade" name="nacionalidade" maxlength="50" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstAutor.php">Voltar</a></p>
</body>
</html>
