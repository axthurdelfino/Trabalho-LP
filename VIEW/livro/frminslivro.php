<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inserir Livro</title>
</head>
<body>
  <h1>Inserir Livro</h1>

  <form action="opinslivro.php" method="post">
    <label for="titulo">Titulo:</label><br>
    <input type="text" id="titulo" name="titulo" maxlength="120" required><br><br>

    <label for="id_autor">ID do autor:</label><br>
    <input type="number" id="id_autor" name="id_autor" min="1" required><br><br>

    <label for="id_categoria">ID da categoria:</label><br>
    <input type="number" id="id_categoria" name="id_categoria" min="1" required><br><br>

    <label for="ano_publicacao">Ano de publicacao:</label><br>
    <input type="number" id="ano_publicacao" name="ano_publicacao" min="1" max="9999" required><br><br>

    <label for="quantidade_total">Quantidade total:</label><br>
    <input type="number" id="quantidade_total" name="quantidade_total" min="0" required><br><br>

    <label for="quantidade_disponivel">Quantidade disponivel:</label><br>
    <input type="number" id="quantidade_disponivel" name="quantidade_disponivel" min="0" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstLivro.php">Voltar</a></p>
</body>
</html>
