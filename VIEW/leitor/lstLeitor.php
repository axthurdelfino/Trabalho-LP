<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/leitor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$dalLeitor = new \DAL\Leitor();
$lstLeitor = $dalLeitor->Select();
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
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Leitores - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv/view/css/lista.css">
</head>
<body>

<div class="lista-container">
    <div class="lista-box">
        
        <!-- Cabeçalho -->
        <div class="lista-header">
            <div class="titulo-container">
                <h1>Lista de Leitores</h1>
            </div>
            <a href="frminsleitor.php" class="btn-novo">+ Novo Leitor</a>
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
                        <th style="text-align: center;">Nome</th>
                        <th style="text-align: center;">E-mail</th>
                        <th style="text-align: center;">Telefone</th>
                        <th style="text-align: center;">Cidade</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($lstLeitor)) { ?>
                        <tr>
                            <td colspan="6" class="mensagem-vazia" style="text-align: center;">Nenhum leitor cadastrado.</td>
                        </tr>
                    <?php } else { ?>
                        <?php foreach ($lstLeitor as $leitor) { ?>
                            <tr>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$leitor->getId()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars($leitor->getNome()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars($leitor->getEmail()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars($leitor->getTelefone()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars($leitor->getCidade()) ?></td>
                                <td style="text-align: center; display: flex; justify-content: center; gap: 10px;" class="acoes">
                                    <a href="frmedtleitor.php?id=<?= urlencode((string)$leitor->getId()) ?>" class="btn-editar">✏️ Editar</a>
                                    <a href="opremleitor.php?id=<?= urlencode((string)$leitor->getId()) ?>" class="btn-remover">🗑️ Remover</a>
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
