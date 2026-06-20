
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Biblioteca</title>
</head>
<body>

    <h2>Login</h2>

    <form action="login.php" method="POST">

        <label>Usuário:</label><br>
        <input type="text" name="usuario" required>
        <br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required>
        <br><br>

        <button type="submit">Entrar</button>

    </form>

    <hr>

    <p>Não possui uma conta?</p>

    <a href="cadastro.php">
        <button type="button">Cadastrar-se</button>
    </a>

</body>
</html>
