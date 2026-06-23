<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/categoria.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$dalCategoria = new \DAL\Categoria();
$lstCategoria = $dalCategoria->Select();
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
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv/view/css/lista.css">
</head>
<body>

<div class="lista-container">
    <div class="lista-box">
        
        <!-- Cabeçalho -->
        <div class="lista-header">
            <div class="titulo-container">
                <h1>Lista de Categorias</h1>
            </div>
            <a href="frminscategoria.php" class="btn-novo">+ Nova Categoria</a>
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
                        <th style="text-align: center;">Descrição</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($lstCategoria)) { ?>
                        <tr>
                            <td colspan="3" class="mensagem-vazia">Nenhuma categoria cadastrada.</td>
                        </tr>
                    <?php } else { ?>
                        <?php foreach ($lstCategoria as $categoria) { ?>
                            <tr>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$categoria->getId()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars($categoria->getDescricao()) ?></td>
                                <td style="text-align: center; display: flex; justify-content: center; gap: 10px;" class="acoes">
                                    <a href="frmedtcategoria.php?id=<?= urlencode((string)$categoria->getId()) ?>" class="btn-editar">✏️ Editar</a>
                                    <a href="opremcategoria.php?id=<?= urlencode((string)$categoria->getId()) ?>" class="btn-remover">🗑️ Remover</a>
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
