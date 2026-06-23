<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Inserir Leitor</title>
</head>
<body>
  <h1>Inserir Leitor</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opinsleitor.php" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" maxlength="100" required><br><br>

    <label for="telefone">Telefone:</label><br>
    <input type="text" id="telefone" name="telefone" maxlength="20" required><br><br>

    <label for="cidade">Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" maxlength="60" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstLeitor.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Inserir Leitor - Sistema Biblioteca</title>
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
            <span class="icone-titulo">👤</span>
            <h1>Inserir Leitor</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opinsleitor.php" method="post">
            <label for="nome">Nome</label>
            <input 
                type="text" 
                id="nome" 
                name="nome" 
                placeholder="Digite o nome completo do leitor"
                maxlength="80" 
                required
            >

            <label for="email">E-mail</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="Digite o e-mail do leitor"
                maxlength="100" 
                required
            >

            <label for="telefone">Telefone</label>
            <input 
                type="text" 
                id="telefone" 
                name="telefone" 
                placeholder="Digite o telefone do leitor"
                maxlength="20" 
                required
            >

            <label for="cidade">Cidade</label>
            <input 
                type="text" 
                id="cidade" 
                name="cidade" 
                placeholder="Digite a cidade do leitor"
                maxlength="60" 
                required
            >

            <button type="submit">
                Salvar Leitor
            </button>
        </form>

        <div class="voltar">
            <a href="lstLeitor.php">← Voltar para lista de leitores</a>
        </div>

    </div>
</div>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
