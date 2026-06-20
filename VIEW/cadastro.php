<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h2>Cadastro de Usuário</h2>

<?php if (isset($_GET['erro']) && $_GET['erro'] === 'login') { ?>
    <p style="color:red;">Login já existe!</p>
<?php } ?>
<?php if (isset($_GET['erro']) && $_GET['erro'] === 'vazio') { ?>
    <p style="color:red;">Preencha todos os campos.</p>
<?php } ?>
<?php if (isset($_GET['erro']) && !in_array($_GET['erro'], ['login', 'vazio'], true)) { ?>
    <p style="color:red;">Erro ao cadastrar.</p>
<?php } ?>

<form action="registro.php" method="POST">

    <label>Nome:</label><br>
    <input type="text" name="nome" required>
    <br><br>

    <label>Login:</label><br>
    <input type="text" name="login" required>
    <br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required>
    <br><br>

    <button type="submit">Cadastrar</button>

</form>

<br>

<a href="index.php">Voltar para Login</a>

</body>
</html>
