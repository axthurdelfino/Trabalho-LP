<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalLivro = new \DAL\Livro();
$livro = $dalLivro->SelectById($id);

if (!$livro) {
<<<<<<< HEAD
  header("Location: lstLivro.php?erro=" . urlencode("Livro não encontrado."));
  exit;
=======
    header("Location: lstLivro.php?erro=" . urlencode("Livro não encontrado."));
    exit;
>>>>>>> d60fd5f (Trabalho Finalizado)
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Editar Livro</title>
</head>
<body>
  <h1>Editar Livro</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opedtlivro.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars((string)$livro->getId()) ?>" readonly><br><br>

    <label for="titulo">Titulo:</label><br>
    <input type="text" id="titulo" name="titulo" maxlength="120" value="<?= htmlspecialchars($livro->getTitulo()) ?>" required><br><br>

    <label for="id_autor">ID do autor:</label><br>
    <input type="number" id="id_autor" name="id_autor" min="1" value="<?= htmlspecialchars((string)$livro->getIdAutor()) ?>" required><br><br>

    <label for="id_categoria">ID da categoria:</label><br>
    <input type="number" id="id_categoria" name="id_categoria" min="1" value="<?= htmlspecialchars((string)$livro->getIdCategoria()) ?>" required><br><br>

    <label for="ano_publicacao">Ano de publicacao:</label><br>
    <input type="number" id="ano_publicacao" name="ano_publicacao" min="1" max="9999" value="<?= htmlspecialchars((string)$livro->getAnoPublicacao()) ?>" required><br><br>

    <label for="quantidade_total">Quantidade total:</label><br>
    <input type="number" id="quantidade_total" name="quantidade_total" min="0" value="<?= htmlspecialchars((string)$livro->getQuantidadeTotal()) ?>" required><br><br>

    <label for="quantidade_disponivel">Quantidade disponivel:</label><br>
    <input type="number" id="quantidade_disponivel" name="quantidade_disponivel" min="0" value="<?= htmlspecialchars((string)$livro->getQuantidadeDisponivel()) ?>" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstLivro.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Editar Livro - Sistema Biblioteca</title>
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
            <span class="icone-titulo">📖</span>
            <h1>Editar Livro</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opedtlivro.php" method="post">
            <label for="id">ID</label>
            <input 
                type="number" 
                id="id" 
                name="id" 
                value="<?= htmlspecialchars((string)$livro->getId()) ?>" 
                readonly
            >

            <label for="titulo">Título</label>
            <input 
                type="text" 
                id="titulo" 
                name="titulo" 
                maxlength="120" 
                value="<?= htmlspecialchars($livro->getTitulo()) ?>" 
                placeholder="Digite o título do livro"
                required
            >

            <label for="id_autor">ID do Autor</label>
            <input 
                type="number" 
                id="id_autor" 
                name="id_autor" 
                min="1" 
                value="<?= htmlspecialchars((string)$livro->getIdAutor()) ?>" 
                placeholder="Digite o ID do autor"
                required
            >

            <label for="id_categoria">ID da Categoria</label>
            <input 
                type="number" 
                id="id_categoria" 
                name="id_categoria" 
                min="1" 
                value="<?= htmlspecialchars((string)$livro->getIdCategoria()) ?>" 
                placeholder="Digite o ID da categoria"
                required
            >

            <label for="ano_publicacao">Ano de Publicação</label>
            <input 
                type="number" 
                id="ano_publicacao" 
                name="ano_publicacao" 
                min="1" 
                max="9999" 
                value="<?= htmlspecialchars((string)$livro->getAnoPublicacao()) ?>" 
                placeholder="Digite o ano de publicação"
                required
            >

            <label for="quantidade_total">Quantidade Total</label>
            <input 
                type="number" 
                id="quantidade_total" 
                name="quantidade_total" 
                min="0" 
                value="<?= htmlspecialchars((string)$livro->getQuantidadeTotal()) ?>" 
                placeholder="Digite a quantidade total"
                required
            >

            <label for="quantidade_disponivel">Quantidade Disponível</label>
            <input 
                type="number" 
                id="quantidade_disponivel" 
                name="quantidade_disponivel" 
                min="0" 
                value="<?= htmlspecialchars((string)$livro->getQuantidadeDisponivel()) ?>" 
                placeholder="Digite a quantidade disponível"
                required
            >

            <button type="submit">
                Atualizar Livro
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
