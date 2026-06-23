<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();
?>
<<<<<<< HEAD

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar CRUDS</title>
</head>
<body>
  <h1>Gerenciar CRUDS</h1>

  <ul>
    <li><a href="autor/lstAutor.php">Autores</a></li>
    <li><a href="categoria/lstCategoria.php">Categorias</a></li>
    <li><a href="leitor/lstLeitor.php">Leitores</a></li>
    <li><a href="livro/lstLivro.php">Livros</a></li>
    <li><a href="emprestimo/lstEmprestimo.php">Empréstimos</a></li>
  </ul>

  <p><a href="home.php">Voltar</a></p>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar CRUDS - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv/view/css/menu.css">
</head>
<body>

<div class="menu-container">
    <div class="menu-box">
        
        <!-- Logo dentro do card -->
        <div class="logo-container">
            <img src="/bibliotecasv/img/logo.jpeg" alt="Logo Biblioteca" class="logo">
        </div>

        <!-- Título com ícone -->
        <div class="titulo-container">
            <span class="icone-titulo">⚙️</span>
            <h1>Gerenciar CRUDS</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <!-- Menu de navegação -->
        <ul class="menu-lista">
            <li>
                <a href="autor/lstAutor.php">
                    <span class="menu-icone">✍️</span>
                    Autores
                    <span class="menu-seta">→</span>
                </a>
            </li>
            <li>
                <a href="categoria/lstCategoria.php">
                    <span class="menu-icone">📂</span>
                    Categorias
                    <span class="menu-seta">→</span>
                </a>
            </li>
            <li>
                <a href="leitor/lstLeitor.php">
                    <span class="menu-icone">👥</span>
                    Leitores
                    <span class="menu-seta">→</span>
                </a>
            </li>
            <li>
                <a href="livro/lstLivro.php">
                    <span class="menu-icone">📚</span>
                    Livros
                    <span class="menu-seta">→</span>
                </a>
            </li>
            <li>
                <a href="emprestimo/lstEmprestimo.php">
                    <span class="menu-icone">📋</span>
                    Empréstimos
                    <span class="menu-seta">→</span>
                </a>
            </li>
        </ul>

        <div class="voltar">
            <a href="home.php">← Voltar para Home</a>
        </div>

    </div>
</div>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
