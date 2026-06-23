<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro - Sistema Biblioteca</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="login-container">
    <div class="logo-container">
        <img src="/bibliotecasv/img/logo.jpeg" alt="Logo Biblioteca" class="logo">
    </div>

    <div class="login-box">

        <h2>Criar Conta</h2>

        <form action="registro.php" method="POST">

            <label for="nome">Nome</label>
            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite seu nome completo"
                required
            >

            <label for="login">Usuário</label>
            <input
                type="text"
                id="login"
                name="login"
                placeholder="Digite seu usuário"
                required
            >

            <label for="senha">Senha</label>
            <div class="senha-container">
                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha"
                    required
                >
<span class="olho-senha-cadastro" onclick="toggleSenha()">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
        <line x1="1" y1="1" x2="23" y2="23"/>
    </svg>
</span>
            </div>

            <button type="submit">
                Cadastrar
            </button>

        </form>

        <div class="cadastro">
            <p>Já possui uma conta?</p>
            <a href="index.php">
                Fazer Login
            </a>
        </div>

    </div>
</div>

<script>
function toggleSenha() {
    var inputSenha = document.getElementById('senha');
    // Busca qualquer classe que comece com "olho-senha"
    var iconeOlho = document.querySelector('[class^="olho-senha"]');
    
    if (inputSenha.type === 'password') {
        inputSenha.type = 'text';
        iconeOlho.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>';
    } else {
        inputSenha.type = 'password';
        iconeOlho.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>';
    }
}
</script>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
