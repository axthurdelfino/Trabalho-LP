<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/categoria.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$dalCategoria = new \DAL\Categoria();
$lstCategoria = $dalCategoria->Select();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Categorias</title>
</head>
<body>
  <h1>Lista de Categorias</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <p><a href="frminscategoria.php">Nova categoria</a></p>

  <table border="1" cellpadding="6" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Descricao</th>
        <th>Acoes</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($lstCategoria)) { ?>
        <tr>
          <td colspan="3">Nenhuma categoria cadastrada.</td>
        </tr>
      <?php } else { ?>
        <?php foreach ($lstCategoria as $categoria) { ?>
          <tr>
            <td><?= htmlspecialchars((string)$categoria->getId()) ?></td>
            <td><?= htmlspecialchars($categoria->getDescricao()) ?></td>
            <td>
              <a href="frmedtcategoria.php?id=<?= urlencode((string)$categoria->getId()) ?>">Editar</a>
              |
              <a href="opremcategoria.php?id=<?= urlencode((string)$categoria->getId()) ?>">Remover</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
