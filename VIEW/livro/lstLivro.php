<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$dalLivro = new \DAL\Livro();
$lstLivro = $dalLivro->Select();
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
  <title>Lista de Livros</title>
</head>
<body>
  <h1>Lista de Livros</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

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
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv/view/css/lista.css">
</head>
<body>

<div class="lista-container">
    <div class="lista-box">
        
        <!-- Cabeçalho -->
        <div class="lista-header">
            <div class="titulo-container">
                <h1>Lista de Livros</h1>
            </div>
            <a href="frminslivro.php" class="btn-novo">+ Novo Livro</a>
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
<thead>
    <tr>
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Título</th>
        <th style="text-align: center;">ID Autor</th>
        <th style="text-align: center;">ID Categoria</th>
        <th style="text-align: center;">Ano</th>
        <th style="text-align: center;">Total</th>
        <th style="text-align: center;">Disponível</th>
        <th style="text-align: center;">Ações</th>
    </tr>
</thead>
                <tbody>
                    <?php if (empty($lstLivro)) { ?>
                        <tr>
                            <td colspan="8" class="mensagem-vazia">Nenhum livro cadastrado.</td>
                        </tr>
                    <?php } else { ?>
                        <?php foreach ($lstLivro as $livro) { ?>
                            <tr>
                                <td style="text-align: center;"><?= htmlspecialchars((string)$livro->getId()) ?></td>
        <td style="text-align: center;"><?= htmlspecialchars($livro->getTitulo()) ?></td>
        <td style="text-align: center;"><?= htmlspecialchars((string)$livro->getIdAutor()) ?></td>
        <td style="text-align: center;"><?= htmlspecialchars((string)$livro->getIdCategoria()) ?></td>
        <td style="text-align: center;"><?= htmlspecialchars((string)$livro->getAnoPublicacao()) ?></td>
        <td style="text-align: center;"><?= htmlspecialchars((string)$livro->getQuantidadeTotal()) ?></td>
        <td style="text-align: center;"><?= htmlspecialchars((string)$livro->getQuantidadeDisponivel()) ?></td>
                                <td style="text-align: center; display: flex; justify-content: center; gap: 10px;" class="acoes">
    <a href="frmedtlivro.php?id=<?= urlencode((string)$livro->getId()) ?>" class="btn-editar">✏️ Editar</a>
    <a href="opremlivro.php?id=<?= urlencode((string)$livro->getId()) ?>" class="btn-remover">🗑️ Remover</a>
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
