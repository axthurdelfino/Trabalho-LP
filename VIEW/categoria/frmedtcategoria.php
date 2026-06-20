<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/categoria.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalCategoria = new \DAL\Categoria();
$categoria = $dalCategoria->SelectById($id);

if (!$categoria) {
  header("Location: lstCategoria.php?erro=" . urlencode("Categoria não encontrada."));
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Categoria</title>
</head>
<body>
  <h1>Editar Categoria</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opedtcategoria.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars((string)$categoria->getId()) ?>" readonly><br><br>

    <label for="descricao">Descricao:</label><br>
    <input type="text" id="descricao" name="descricao" maxlength="60" value="<?= htmlspecialchars($categoria->getDescricao()) ?>" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstCategoria.php">Voltar</a></p>
</body>
</html>
