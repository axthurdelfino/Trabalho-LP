<<<<<<< HEAD

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Biblioteca</title>
</head>
<body>

    <h2>Login</h2>

    <?php if (isset($_GET['erro']) && $_GET['erro'] === 'login') { ?>
        <p style="color:red;">Usuário ou senha inválidos.</p>
    <?php } ?>
    <?php if (isset($_GET['erro']) && $_GET['erro'] === 'vazio') { ?>
        <p style="color:red;">Preencha usuário e senha.</p>
    <?php } ?>

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
=======
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema Biblioteca</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="login-container">
            <div class="logo-container">
            <img src="img/logo.jpeg" alt="Logo" class="logo">  
        </div>

    <div class="login-box">

        <h2>Sistema Biblioteca</h2>

        <form action="login.php" method="POST">

            <label for="usuario">Usuário</label>

            <input
                type="text"
                id="usuario"
                name="usuario"
                placeholder="Digite seu usuário"
                required
            >

            <label for="senha">Senha</label>

            <input
                type="password"
                id="senha"
                name="senha"
                placeholder="Digite sua senha"
                required
            >

<span class="olho-senha-login" onclick="toggleSenha()">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
        <line x1="1" y1="1" x2="23" y2="23"/>
    </svg>
</span>

            <button type="submit">
                Entrar
            </button>

        </form>

        <div class="cadastro">

            <p>Não possui uma conta?</p>

            <a href="cadastro.php">
                Criar Conta
            </a>

        </div>

    </div>



<script src="/bibliotecasv/view/js/init.js"></script>



</body>

</body>

</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
