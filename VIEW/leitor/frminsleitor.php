<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inserir Leitor</title>
</head>
<body>
  <h1>Inserir Leitor</h1>

  <form action="opinsleitor.php" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" maxlength="100" required><br><br>

    <label for="telefone">Telefone:</label><br>
    <input type="text" id="telefone" name="telefone" maxlength="20" required><br><br>

    <label for="cidade">Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" maxlength="60" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstLeitor.php">Voltar</a></p>
</body>
</html>
