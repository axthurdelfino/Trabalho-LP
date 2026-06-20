<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$dalAutor = new \DAL\Autor();
$lstAutor = $dalAutor->Select();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Autores</title>
</head>
<body>
  <h1>Lista de Autores</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <p><a href="frminsautor.php">Novo autor</a></p>

  <table border="1" cellpadding="6" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Nacionalidade</th>
        <th>Acoes</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($lstAutor)) { ?>
        <tr>
          <td colspan="4">Nenhum autor cadastrado.</td>
        </tr>
      <?php } else { ?>
        <?php foreach ($lstAutor as $autor) { ?>
          <tr>
            <td><?= htmlspecialchars((string)$autor->getId()) ?></td>
            <td><?= htmlspecialchars($autor->getNome()) ?></td>
            <td><?= htmlspecialchars($autor->getNacionalidade()) ?></td>
            <td>
              <a href="frmedtautor.php?id=<?= urlencode((string)$autor->getId()) ?>">Editar</a>
              |
              <a href="opremautor.php?id=<?= urlencode((string)$autor->getId()) ?>">Remover</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
