<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$dalAutor = new \DAL\Autor();
$lstAutor = $dalAutor->Select();
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
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Autores - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv/view/css/lista.css">
</head>
<body>

<div class="lista-container">
    <div class="lista-box">
        
        <!-- Cabeçalho -->
        <div class="lista-header">
            <div class="titulo-container">
                <h1>Lista de Autores</h1>
            </div>
            <a href="frminsautor.php" class="btn-novo">+ Novo Autor</a>
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
                        <th style="text-align: center;">Nacionalidade</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($lstAutor)) { ?>
                        <tr>
                            <td colspan="4" class="mensagem-vazia">Nenhum autor cadastrado.</td>
                        </tr>
                    <?php } else { ?>
                        <?php foreach ($lstAutor as $autor) { ?>
                            <td style="text-align: center;"><?= htmlspecialchars((string)$autor->getId()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars($autor->getNome()) ?></td>
                                <td style="text-align: center;"><?= htmlspecialchars($autor->getNacionalidade()) ?></td>
                                <td style="text-align: center; display: flex; justify-content: center; gap: 10px;" class="acoes">
    <a href="frmedtautor.php?id=<?= urlencode((string)$autor->getId()) ?>" class="btn-editar">✏️ Editar</a>
    <a href="opremautor.php?id=<?= urlencode((string)$autor->getId()) ?>" class="btn-remover">🗑️ Remover</a>
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
