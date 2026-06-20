<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Inserir Emprestimo</title>
</head>
<body>
  <h1>Inserir Emprestimo</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opinsemprestimo.php" method="post">
    <label for="id_livro">ID do livro:</label><br>
    <input type="number" id="id_livro" name="id_livro" min="1" required><br><br>

    <label for="id_leitor">ID do leitor:</label><br>
    <input type="number" id="id_leitor" name="id_leitor" min="1" required><br><br>

    <label for="data_emprestimo">Data do emprestimo:</label><br>
    <input type="date" id="data_emprestimo" name="data_emprestimo" required><br><br>

    <label for="data_prevista_devolucao">Data prevista de devolucao:</label><br>
    <input type="date" id="data_prevista_devolucao" name="data_prevista_devolucao" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstEmprestimo.php">Voltar</a></p>
</body>
</html>
