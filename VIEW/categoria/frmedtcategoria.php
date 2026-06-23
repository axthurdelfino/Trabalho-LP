<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/categoria.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalCategoria = new \DAL\Categoria();
$categoria = $dalCategoria->SelectById($id);

if (!$categoria) {
<<<<<<< HEAD
  header("Location: lstCategoria.php?erro=" . urlencode("Categoria não encontrada."));
  exit;
=======
    header("Location: lstCategoria.php?erro=" . urlencode("Categoria não encontrada."));
    exit;
>>>>>>> d60fd5f (Trabalho Finalizado)
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Editar Categoria</title>
</head>
<body>
  <h1>Editar Categoria</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opedtcategoria.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars((string)$categoria->getId()) ?>" readonly><br><br>

    <label for="descricao">Descricao:</label><br>
    <input type="text" id="descricao" name="descricao" maxlength="60" value="<?= htmlspecialchars($categoria->getDescricao()) ?>" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstCategoria.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Editar Categoria - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv//view/css/editar.css">
</head>
<body>

<div class="editar-container">
    <div class="editar-box">
        
        <!-- Logo dentro do card -->
        <div class="logo-container">
            <img src="/bibliotecasv/img/logo.jpeg" alt="Logo Biblioteca" class="logo">
        </div>

        <!-- Título com ícone -->
        <div class="titulo-container">
            <span class="icone-titulo">📂</span>
            <h1>Editar Categoria</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opedtcategoria.php" method="post">
            <label for="id">ID</label>
            <input 
                type="number" 
                id="id" 
                name="id" 
                value="<?= htmlspecialchars((string)$categoria->getId()) ?>" 
                readonly
            >

            <label for="descricao">Descrição</label>
            <input 
                type="text" 
                id="descricao" 
                name="descricao" 
                maxlength="60" 
                value="<?= htmlspecialchars($categoria->getDescricao()) ?>" 
                placeholder="Digite a descrição da categoria"
                required
            >

            <button type="submit">
                Atualizar Categoria
            </button>
        </form>

        <div class="voltar">
            <a href="lstCategoria.php">← Voltar para lista de categorias</a>
        </div>

    </div>
</div>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
