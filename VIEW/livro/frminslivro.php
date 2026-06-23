<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Inserir Livro</title>
</head>
<body>
  <h1>Inserir Livro</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opinslivro.php" method="post">
    <label for="titulo">Titulo:</label><br>
    <input type="text" id="titulo" name="titulo" maxlength="120" required><br><br>

    <label for="id_autor">ID do autor:</label><br>
    <input type="number" id="id_autor" name="id_autor" min="1" required><br><br>

    <label for="id_categoria">ID da categoria:</label><br>
    <input type="number" id="id_categoria" name="id_categoria" min="1" required><br><br>

    <label for="ano_publicacao">Ano de publicacao:</label><br>
    <input type="number" id="ano_publicacao" name="ano_publicacao" min="1" max="9999" required><br><br>

    <label for="quantidade_total">Quantidade total:</label><br>
    <input type="number" id="quantidade_total" name="quantidade_total" min="0" required><br><br>

    <label for="quantidade_disponivel">Quantidade disponivel:</label><br>
    <input type="number" id="quantidade_disponivel" name="quantidade_disponivel" min="0" required><br><br>

    <button type="submit">Salvar</button>
  </form>

  <p><a href="lstLivro.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Inserir Livro - Sistema Biblioteca</title>
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
            <span class="icone-titulo">📖</span>
            <h1>Inserir Livro</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opinslivro.php" method="post">
            <label for="titulo">Título</label>
            <input 
                type="text" 
                id="titulo" 
                name="titulo" 
                placeholder="Digite o título do livro"
                maxlength="120" 
                required
            >

            <label for="id_autor">ID do Autor</label>
            <input 
                type="number" 
                id="id_autor" 
                name="id_autor" 
                placeholder="Digite o ID do autor"
                min="1" 
                required
            >

            <label for="id_categoria">ID da Categoria</label>
            <input 
                type="number" 
                id="id_categoria" 
                name="id_categoria" 
                placeholder="Digite o ID da categoria"
                min="1" 
                required
            >

            <label for="ano_publicacao">Ano de Publicação</label>
            <input 
                type="number" 
                id="ano_publicacao" 
                name="ano_publicacao" 
                placeholder="Digite o ano de publicação"
                min="1" 
                max="9999" 
                required
            >

            <label for="quantidade_total">Quantidade Total</label>
            <input 
                type="number" 
                id="quantidade_total" 
                name="quantidade_total" 
                placeholder="Digite a quantidade total"
                min="0" 
                required
            >

            <label for="quantidade_disponivel">Quantidade Disponível</label>
            <input 
                type="number" 
                id="quantidade_disponivel" 
                name="quantidade_disponivel" 
                placeholder="Digite a quantidade disponível"
                min="0" 
                required
            >

            <button type="submit">
                Salvar Livro
            </button>
        </form>

        <div class="voltar">
            <a href="lstLivro.php">← Voltar para lista de livros</a>
        </div>

    </div>
</div>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
