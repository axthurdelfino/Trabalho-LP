<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/leitor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$dalLeitor = new \DAL\Leitor();
$lstLeitor = $dalLeitor->Select();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Leitores</title>
</head>
<body>
  <h1>Lista de Leitores</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <p><a href="frminsleitor.php">Novo leitor</a></p>

  <table border="1" cellpadding="6" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th>Acoes</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($lstLeitor)) { ?>
        <tr>
          <td colspan="6">Nenhum leitor cadastrado.</td>
        </tr>
      <?php } else { ?>
        <?php foreach ($lstLeitor as $leitor) { ?>
          <tr>
            <td><?= htmlspecialchars((string)$leitor->getId()) ?></td>
            <td><?= htmlspecialchars($leitor->getNome()) ?></td>
            <td><?= htmlspecialchars($leitor->getEmail()) ?></td>
            <td><?= htmlspecialchars($leitor->getTelefone()) ?></td>
            <td><?= htmlspecialchars($leitor->getCidade()) ?></td>
            <td>
              <a href="frmedtleitor.php?id=<?= urlencode((string)$leitor->getId()) ?>">Editar</a>
              |
              <a href="opremleitor.php?id=<?= urlencode((string)$leitor->getId()) ?>">Remover</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
