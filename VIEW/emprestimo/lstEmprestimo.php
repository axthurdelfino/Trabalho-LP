<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";

$dalEmprestimo = new \DAL\Emprestimo();
$lstEmprestimo = $dalEmprestimo->Select();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Emprestimos</title>
</head>
<body>
  <h1>Lista de Emprestimos</h1>

  <p><a href="frminsemprestimo.php">Novo emprestimo</a></p>

  <table border="1" cellpadding="6" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>ID Livro</th>
        <th>ID Leitor</th>
        <th>Emprestimo</th>
        <th>Prevista</th>
        <th>Devolucao</th>
        <th>Status</th>
        <th>Acoes</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($lstEmprestimo)) { ?>
        <tr>
          <td colspan="8">Nenhum emprestimo cadastrado.</td>
        </tr>
      <?php } else { ?>
        <?php foreach ($lstEmprestimo as $emprestimo) { ?>
          <tr>
            <td><?= htmlspecialchars((string)$emprestimo->getId()) ?></td>
            <td><?= htmlspecialchars((string)$emprestimo->getIdLivro()) ?></td>
            <td><?= htmlspecialchars((string)$emprestimo->getIdLeitor()) ?></td>
            <td><?= htmlspecialchars((string)$emprestimo->getDataEmprestimo()) ?></td>
            <td><?= htmlspecialchars((string)$emprestimo->getDataPrevistaDevolucao()) ?></td>
            <td><?= htmlspecialchars((string)$emprestimo->getDataDevolucao()) ?></td>
            <td><?= htmlspecialchars((string)$emprestimo->getStatus()) ?></td>
            <td>
              <a href="frmdetemprestimo.php?id=<?= urlencode((string)$emprestimo->getId()) ?>">Detalhe</a>
              |
              <a href="opdevolucao.php?id=<?= urlencode((string)$emprestimo->getId()) ?>">Devolver</a>
              |
              <a href="oprememprestimo.php?id=<?= urlencode((string)$emprestimo->getId()) ?>">Remover</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
