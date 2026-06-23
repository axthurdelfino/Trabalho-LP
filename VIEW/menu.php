<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";
exigirLogin();

use DAL\Conexao;
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/conexao.php";

$livrosTop = [];
$ultimosEmprestimos = [];

try {
    $con = Conexao::conectar();
    
    $sql = "SELECT l.titulo, COUNT(e.id) as total_emprestimos 
            FROM livro l 
            LEFT JOIN emprestimo e ON l.id = e.id_livro 
            GROUP BY l.id 
            ORDER BY total_emprestimos DESC 
            LIMIT 5";
    $resultLivrosTop = $con->query($sql);
    $livrosTop = $resultLivrosTop->fetchAll(\PDO::FETCH_ASSOC);
    
    $sql = "SELECT e.id, l.titulo, le.nome, e.data_emprestimo, e.data_prevista_devolucao, e.status 
            FROM emprestimo e 
            JOIN livro l ON e.id_livro = l.id 
            JOIN leitor le ON e.id_leitor = le.id 
            ORDER BY e.data_emprestimo DESC 
            LIMIT 10";
    $resultUltimos = $con->query($sql);
    $ultimosEmprestimos = $resultUltimos->fetchAll(\PDO::FETCH_ASSOC);
    
} catch (\PDOException $e) {
    error_log("Erro no Dashboard da Biblioteca: " . $e->getMessage());
} finally {
    Conexao::desconectar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Sistema Biblioteca</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <div class="container">

        <header class="cabecalho">
            <div class="logo-area">
                <img src="/bibliotecasv/VIEW/img/logo.jpeg" alt="Logo" class="logo-img">
                <span class="logo-texto">Sistema Biblioteca</span>
            </div>

            <div class="usuario-area">
                <?php if(isset($_SESSION['usuario'])): ?>
                    <span class="usuario valign-wrapper">
                        <i class="material-icons">account_circle</i>
                        <?= htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8') ?>
                    </span>
                <?php endif; ?>

                <a href="logout.php" class="sair waves-effect waves-light btn red darken-2 valign-wrapper">
                    <i class="material-icons">logout</i>
                    <span>Sair</span>
                </a>
            </div>
        </header>

        <main class="conteudo">
            
            <div class="titulo-container">
                <i class="material-icons blue-text text-darken-4">dashboard</i>
                <h2 class="titulo-texto">Gerenciar Sistema</h2>
            </div>

            <div class="menu-grid">

                <a href="autor/lstAutor.php" class="menu-card waves-effect waves-light z-depth-1">
                    <i class="material-icons menu-icon">person</i>
                    <h3>Autores</h3>
                    <p>Gerenciar autores</p>
                </a>

                <a href="categoria/lstCategoria.php" class="menu-card waves-effect waves-light z-depth-1">
                    <i class="material-icons menu-icon">category</i>
                    <h3>Categorias</h3>
                    <p>Gerenciar categorias</p>
                </a>

                <a href="leitor/lstLeitor.php" class="menu-card waves-effect waves-light z-depth-1">
                    <i class="material-icons menu-icon">groups</i>
                    <h3>Leitores</h3>
                    <p>Gerenciar leitores</p>
                </a>

                <a href="livro/lstLivro.php" class="menu-card waves-effect waves-light z-depth-1">
                    <i class="material-icons menu-icon">menu_book</i>
                    <h3>Livros</h3>
                    <p>Gerenciar livros</p>
                </a>

                <a href="emprestimo/lstEmprestimo.php" class="menu-card waves-effect waves-light z-depth-1">
                    <i class="material-icons menu-icon">assignment</i>
                    <h3>Empréstimos</h3>
                    <p>Gerenciar empréstimos</p>
                </a>

            </div>

            <div class="dashboard-row">

                <div class="dashboard-col">
                    <div class="card-dashboard z-depth-1">
                        <div class="card-title-container">
                            <i class="material-icons blue-text text-darken-4">bar_chart</i>
                            <h3>Livros Mais Emprestados</h3>
                        </div>

                        <canvas id="chartLivros"></canvas>
                    </div>
                </div>

                <div class="dashboard-col">
                    <div class="card-dashboard z-depth-1">
                        <div class="card-title-container">
                            <i class="material-icons blue-text text-darken-4">history</i>
                            <h3>Últimos Empréstimos</h3>
                        </div>

                        <div class="tabela-container">
                            <?php if(count($ultimosEmprestimos) > 0): ?>
                                <table class="tabela-ultimos striped highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Livro</th>
                                            <th>Leitor</th>
                                            <th>Data</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($ultimosEmprestimos as $emp): ?>
                                            <tr>
                                                <td><?= htmlspecialchars($emp['titulo'], ENT_QUOTES, 'UTF-8') ?></td>
                                                <td><?= htmlspecialchars($emp['nome'], ENT_QUOTES, 'UTF-8') ?></td>
                                                <td><?= date('d/m/Y', strtotime($emp['data_emprestimo'])) ?></td>

                                                <td>
                                                    <?php
                                                        $ehEmprestado = ($emp['status'] === 'emprestado');
                                                        $classeStatus = $ehEmprestado ? 'status-emprestado' : 'status-devolvido';
                                                        $iconStatus = $ehEmprestado ? 'bookmark' : 'check_circle';
                                                        $textoStatus = $ehEmprestado ? 'Emprestado' : 'Devolvido';
                                                    ?>

                                                    <span class="<?= $classeStatus ?> valign-wrapper">
                                                        <i class="material-icons left font-14"><?= $iconStatus ?></i>
                                                        <?= $textoStatus ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p class="sem-dados">Nenhum empréstimo registrado</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>

            <footer class="rodape">
                <p>Sistema Biblioteca © <?= date('Y') ?></p>
            </footer>

        </main>

    </div>

    <script>
        window.dadosLivros = <?= json_encode($livrosTop) ?>;
    </script>

    <script src="js/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>