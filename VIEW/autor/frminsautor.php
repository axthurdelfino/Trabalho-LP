<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Inserir Autor</title>
</head>
<body>
  <h1>Inserir Autor</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opinsautor.php" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" required><br><br>

    <label for="nacionalidade">Nacionalidade:</label><br>
    <input type="text" id="nacionalidade" name="nacionalidade" maxlength="50" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstAutor.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Inserir Autor - Sistema Biblioteca</title>
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
            
            <h1>Inserir Autor</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opinsautor.php" method="post">
            <label for="nome">Nome do Autor</label>
            <input 
                type="text" 
                id="nome" 
                name="nome" 
                placeholder="Digite o nome completo do autor"
                maxlength="80" 
                required
            >

            <label for="nacionalidade">Nacionalidade</label>
            <input 
                type="text" 
                id="nacionalidade" 
                name="nacionalidade" 
                placeholder="Ex: Brasileira, Americana, Francesa..."
                maxlength="50" 
                required
            >

            <button type="submit">
                Salvar Autor
            </button>
        </form>

        <div class="voltar">
            <a href="lstAutor.php">← Voltar para lista de autores</a>
        </div>

    </div>
</div>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
