<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Inserir Emprestimo</title>
</head>
<body>
  <h1>Inserir Emprestimo</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opinsemprestimo.php" method="post">
    <label for="id_livro">ID do livro:</label><br>
    <input type="number" id="id_livro" name="id_livro" min="1" required><br><br>

    <label for="id_leitor">ID do leitor:</label><br>
    <input type="number" id="id_leitor" name="id_leitor" min="1" required><br><br>

    <label for="data_emprestimo">Data do emprestimo:</label><br>
    <input type="date" id="data_emprestimo" name="data_emprestimo" required><br><br>

    <label for="data_prevista_devolucao">Data prevista de devolucao:</label><br>
    <input type="date" id="data_prevista_devolucao" name="data_prevista_devolucao" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstEmprestimo.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Inserir Empréstimo - Sistema Biblioteca</title>
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
            <span class="icone-titulo">📋</span>
            <h1>Inserir Empréstimo</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opinsemprestimo.php" method="post">
            <label for="id_livro">ID do Livro</label>
            <input 
                type="number" 
                id="id_livro" 
                name="id_livro" 
                placeholder="Digite o ID do livro"
                min="1" 
                required
            >

            <label for="id_leitor">ID do Leitor</label>
            <input 
                type="number" 
                id="id_leitor" 
                name="id_leitor" 
                placeholder="Digite o ID do leitor"
                min="1" 
                required
            >

            <label for="data_emprestimo">Data do Empréstimo</label>
            <input 
                type="date" 
                id="data_emprestimo" 
                name="data_emprestimo" 
                required
            >

            <label for="data_prevista_devolucao">Data Prevista de Devolução</label>
            <input 
                type="date" 
                id="data_prevista_devolucao" 
                name="data_prevista_devolucao" 
                required
            >

            <button type="submit">
                Salvar Empréstimo
            </button>
        </form>

        <div class="voltar">
            <a href="lstEmprestimo.php">← Voltar para lista de empréstimos</a>
        </div>

    </div>
</div>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
