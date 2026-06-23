<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Inserir Categoria</title>
</head>
<body>
  <h1>Inserir Categoria</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opinscategoria.php" method="post">
    <label for="descricao">Descricao:</label><br>
    <input type="text" id="descricao" name="descricao" maxlength="60" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstCategoria.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Inserir Categoria - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv/VIEW/css/inserir.css">
</head>
<body>

<div class="inserir-container">
    <div class="inserir-box">
        
        <!-- Logo dentro do card -->
        <div class="logo-container">
            <img src="/bibliotecasv/img/logo.jpeg" alt="Logo Biblioteca" class="logo">
        </div>

        <!-- Título com ícone -->
        <div class="titulo-container">
            <span class="icone-titulo">📂</span>
            <h1>Inserir Categoria</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opinscategoria.php" method="post">
            <label for="descricao">Descrição</label>
            <input 
                type="text" 
                id="descricao" 
                name="descricao" 
                placeholder="Digite a descrição da categoria"
                maxlength="60" 
                required
            >

            <button type="submit">
                Salvar Categoria
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
