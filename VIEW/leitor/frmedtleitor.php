<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/leitor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalLeitor = new \DAL\Leitor();
$leitor = $dalLeitor->SelectById($id);

if (!$leitor) {
  header("Location: lstLeitor.php?erro=" . urlencode("Leitor não encontrado."));
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Leitor</title>
</head>
<body>
  <h1>Editar Leitor</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opedtleitor.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars((string)$leitor->getId()) ?>" readonly><br><br>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" value="<?= htmlspecialchars($leitor->getNome()) ?>" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" maxlength="100" value="<?= htmlspecialchars($leitor->getEmail()) ?>" required><br><br>

    <label for="telefone">Telefone:</label><br>
    <input type="text" id="telefone" name="telefone" maxlength="20" value="<?= htmlspecialchars($leitor->getTelefone()) ?>" required><br><br>

    <label for="cidade">Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" maxlength="60" value="<?= htmlspecialchars($leitor->getCidade()) ?>" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstLeitor.php">Voltar</a></p>
</body>
</html>
