<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/leitor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalLeitor = new \DAL\Leitor();
$leitor = $dalLeitor->SelectById($id);

if (!$leitor) {
<<<<<<< HEAD
  header("Location: lstLeitor.php?erro=" . urlencode("Leitor não encontrado."));
  exit;
=======
    header("Location: lstLeitor.php?erro=" . urlencode("Leitor não encontrado."));
    exit;
>>>>>>> d60fd5f (Trabalho Finalizado)
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Editar Leitor</title>
</head>
<body>
  <h1>Editar Leitor</h1>

  <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
    <p style="color:red;"><?php echo htmlspecialchars($_GET['erro']); ?></p>
  <?php } ?>

  <form action="opedtleitor.php" method="post">
    <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value="<?= htmlspecialchars((string)$leitor->getId()) ?>" readonly><br><br>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" maxlength="80" value="<?= htmlspecialchars($leitor->getNome()) ?>" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" maxlength="100" value="<?= htmlspecialchars($leitor->getEmail()) ?>" required><br><br>

    <label for="telefone">Telefone:</label><br>
    <input type="text" id="telefone" name="telefone" maxlength="20" value="<?= htmlspecialchars($leitor->getTelefone()) ?>" required><br><br>

    <label for="cidade">Cidade:</label><br>
    <input type="text" id="cidade" name="cidade" maxlength="60" value="<?= htmlspecialchars($leitor->getCidade()) ?>" required><br><br>

    <button type="submit">Atualizar</button>
  </form>

  <p><a href="lstLeitor.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <title>Editar Leitor - Sistema Biblioteca</title>
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
            <h1>Editar Leitor</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (isset($_GET['erro']) && $_GET['erro'] !== '') { ?>
            <div class="mensagem-erro">
                ⚠️ <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php } ?>

        <form action="opedtleitor.php" method="post">
            <label for="id">ID</label>
            <input 
                type="number" 
                id="id" 
                name="id" 
                value="<?= htmlspecialchars((string)$leitor->getId()) ?>" 
                readonly
            >

            <label for="nome">Nome</label>
            <input 
                type="text" 
                id="nome" 
                name="nome" 
                maxlength="80" 
                value="<?= htmlspecialchars($leitor->getNome()) ?>" 
                placeholder="Digite o nome completo do leitor"
                required
            >

            <label for="email">E-mail</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                maxlength="100" 
                value="<?= htmlspecialchars($leitor->getEmail()) ?>" 
                placeholder="Digite o e-mail do leitor"
                required
            >

            <label for="telefone">Telefone</label>
            <input 
                type="text" 
                id="telefone" 
                name="telefone" 
                maxlength="20" 
                value="<?= htmlspecialchars($leitor->getTelefone()) ?>" 
                placeholder="Digite o telefone do leitor"
                required
            >

            <label for="cidade">Cidade</label>
            <input 
                type="text" 
                id="cidade" 
                name="cidade" 
                maxlength="60" 
                value="<?= htmlspecialchars($leitor->getCidade()) ?>" 
                placeholder="Digite a cidade do leitor"
                required
            >

            <button type="submit">
                Atualizar Leitor
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
