<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/autor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalAutor = new \DAL\Autor();
$autor = $dalAutor->SelectById($id);

if (!$autor) {
<<<<<<< HEAD
  header("Location: lstAutor.php?erro=" . urlencode("Autor não encontrado."));
  exit;
=======
    header("Location: lstAutor.php?erro=" . urlencode("Autor não encontrado."));
    exit;
>>>>>>> d60fd5f (Trabalho Finalizado)
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Editar Autor</title>
</head>
<body>
  <h1>Editar Autor</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opedtautor.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars((string)$autor->getId()) ?>" readonly><br><br>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" value="<?= htmlspecialchars($autor->getNome()) ?>" required><br><br>

    <label for="nacionalidade">Nacionalidade:</label><br>
    <input type="text" id="nacionalidade" name="nacionalidade" maxlength="50" value="<?= htmlspecialchars($autor->getNacionalidade()) ?>" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstAutor.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Editar Autor - Sistema Biblioteca</title>
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
            <span class="icone-titulo">✏️</span>
            <h1>Editar Autor</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opedtautor.php" method="post">
            <label for="id">ID</label>
            <input 
                type="number" 
                id="id" 
                name="id" 
                value="<?= htmlspecialchars((string)$autor->getId()) ?>" 
                readonly
            >

            <label for="nome">Nome</label>
            <input 
                type="text" 
                id="nome" 
                name="nome" 
                maxlength="80" 
                value="<?= htmlspecialchars($autor->getNome()) ?>" 
                placeholder="Digite o nome do autor"
                required
            >

            <label for="nacionalidade">Nacionalidade</label>
            <input 
                type="text" 
                id="nacionalidade" 
                name="nacionalidade" 
                maxlength="50" 
                value="<?= htmlspecialchars($autor->getNacionalidade()) ?>" 
                placeholder="Digite a nacionalidade"
                required
            >

            <button type="submit">
                Atualizar Autor
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
