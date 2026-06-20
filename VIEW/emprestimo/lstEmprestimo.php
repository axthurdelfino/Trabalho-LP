<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

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

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

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
              <form action="frmdetemprestimo.php" method="get" style="display:inline;">
                <input type="hidden" name="id" value="<?= htmlspecialchars((string)$emprestimo->getId()) ?>">
                <button type="submit">Detalhe</button>
              </form>
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
