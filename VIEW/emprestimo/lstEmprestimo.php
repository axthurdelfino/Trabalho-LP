<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$dalEmprestimo = new \DAL\Emprestimo();
$lstEmprestimo = $dalEmprestimo->Select();
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
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
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empréstimos - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv//view/css/lista.css">
</head>
<body>

<div class="lista-container">
    <div class="lista-box">
        
        <!-- Cabeçalho -->
        <div class="lista-header">
            <div class="titulo-container">
                <h1>Lista de Empréstimos</h1>
            </div>
            <a href="frminsemprestimo.php" class="btn-novo">+ Novo Empréstimo</a>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <div class="tabela-container">
            <table>
                <thead>
                    <tr>
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">ID Livro</th>
                        <th style="text-align: center;">ID Leitor</th>
                        <th style="text-align: center;">Empréstimo</th>
                        <th style="text-align: center;">Prevista</th>
                        <th style="text-align: center;">Devolução</th>
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($lstEmprestimo)) { ?>
                        <tr>
                            <td colspan="8" class="mensagem-vazia" style="text-align: center;">Nenhum empréstimo cadastrado.</td>
                        </tr>
                    <?php } else { ?>
                        <?php foreach ($lstEmprestimo as $emprestimo) { ?>
                            <tr>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$emprestimo->getId()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$emprestimo->getIdLivro()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$emprestimo->getIdLeitor()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$emprestimo->getDataEmprestimo()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$emprestimo->getDataPrevistaDevolucao()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$emprestimo->getDataDevolucao()) ?></td>
                                <td style="text-align: center;">
                                    <span class="status-<?= strtolower($emprestimo->getStatus()) ?>">
                                        <?= htmlspecialchars($emprestimo->getStatus()) ?>
                                    </span>
                                </td>
                                <td style="text-align: center; display: flex; justify-content: center; gap: 10px;" class="acoes">
                                    <form action="frmdetemprestimo.php" method="get" style="display:inline;">
                                        <input type="hidden" name="id" value="<?= htmlspecialchars((string)$emprestimo->getId()) ?>">
                                        <button type="submit" class="btn-detalhe">🔍 Detalhe</button>
                                    </form>
                                    <a href="opdevolucao.php?id=<?= urlencode((string)$emprestimo->getId()) ?>" class="btn-devolver">📥 Devolver</a>
                                    <a href="oprememprestimo.php?id=<?= urlencode((string)$emprestimo->getId()) ?>" class="btn-remover">🗑️ Remover</a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    
    <div class="lista-footer">
        <a href=/bibliotecasv/VIEW/menu.php>← Voltar para o início</a>
    </div>
</div>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
