<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalAutor = new \DAL\Autor();
$autor = $dalAutor->SelectById($id);

if (!$autor) {
  header("Location: lstAutor.php?erro=" . urlencode("Autor não encontrado."));
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Autor</title>
</head>
<body>
  <h1>Editar Autor</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opedtautor.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars((string)$autor->getId()) ?>" readonly><br><br>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" value="<?= htmlspecialchars($autor->getNome()) ?>" required><br><br>

    <label for="nacionalidade">Nacionalidade:</label><br>
    <input type="text" id="nacionalidade" name="nacionalidade" maxlength="50" value="<?= htmlspecialchars($autor->getNacionalidade()) ?>" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstAutor.php">Voltar</a></p>
</body>
</html>
