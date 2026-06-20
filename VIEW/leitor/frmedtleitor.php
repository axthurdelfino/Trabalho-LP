<?php
$id = $_GET['id'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Leitor</title>
</head>
<body>
  <h1>Editar Leitor</h1>

  <form action="opedtleitor.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars($id) ?>" required><br><br>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" maxlength="100" required><br><br>

    <label for="telefone">Telefone:</label><br>
    <input type="text" id="telefone" name="telefone" maxlength="20" required><br><br>

    <label for="cidade">Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" maxlength="60" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstLeitor.php">Voltar</a></p>
</body>
</html>
