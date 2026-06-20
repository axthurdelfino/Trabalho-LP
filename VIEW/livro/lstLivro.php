<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/livro.php";

$dalLivro = new \DAL\Livro();
$lstLivro = $dalLivro->Select();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Livros</title>
</head>
<body>
  <h1>Lista de Livros</h1>

  <p><a href="frminslivro.php">Novo livro</a></p>

  <table border="1" cellpadding="6" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>ID Autor</th>
        <th>ID Categoria</th>
        <th>Ano</th>
        <th>Total</th>
        <th>Disponivel</th>
        <th>Acoes</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($lstLivro)) { ?>
        <tr>
          <td colspan="8">Nenhum livro cadastrado.</td>
        </tr>
      <?php } else { ?>
        <?php foreach ($lstLivro as $livro) { ?>
          <tr>
            <td><?= htmlspecialchars((string)$livro->getId()) ?></td>
            <td><?= htmlspecialchars($livro->getTitulo()) ?></td>
            <td><?= htmlspecialchars((string)$livro->getIdAutor()) ?></td>
            <td><?= htmlspecialchars((string)$livro->getIdCategoria()) ?></td>
            <td><?= htmlspecialchars((string)$livro->getAnoPublicacao()) ?></td>
            <td><?= htmlspecialchars((string)$livro->getQuantidadeTotal()) ?></td>
            <td><?= htmlspecialchars((string)$livro->getQuantidadeDisponivel()) ?></td>
            <td>
              <a href="frmedtlivro.php?id=<?= urlencode((string)$livro->getId()) ?>">Editar</a>
              |
              <a href="opremlivro.php?id=<?= urlencode((string)$livro->getId()) ?>">Remover</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
