<?php
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalEmprestimo = new \DAL\Emprestimo();
$detalhe = $dalEmprestimo->SelectDetalhe($id);
<<<<<<< HEAD

=======
>>>>>>> d60fd5f (Trabalho Finalizado)
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <title>Detalhe Emprestimo</title>
</head>
<body>
  <h1>Detalhe Emprestimo</h1>

  <?php if (!$detalhe) { ?>
    <p>Empréstimo não encontrado.</p>
  <?php } else { ?>
    <h2>Empréstimo</h2>
    <p><strong>ID:</strong> <?= htmlspecialchars((string)$detalhe['emprestimo_id']) ?></p>
    <p><strong>Status:</strong> <?= htmlspecialchars($detalhe['status']) ?></p>
    <p><strong>Data do empréstimo:</strong> <?= htmlspecialchars($detalhe['data_emprestimo']) ?></p>
    <p><strong>Data prevista de devolução:</strong> <?= htmlspecialchars($detalhe['data_prevista_devolucao']) ?></p>
    <p><strong>Data de devolução:</strong> <?= htmlspecialchars((string)$detalhe['data_devolucao']) ?></p>

    <h2>Livro</h2>
    <p><strong>ID:</strong> <?= htmlspecialchars((string)$detalhe['livro_id']) ?></p>
    <p><strong>Título:</strong> <?= htmlspecialchars($detalhe['titulo']) ?></p>
    <p><strong>Ano de publicação:</strong> <?= htmlspecialchars((string)$detalhe['ano_publicacao']) ?></p>
    <p><strong>Quantidade total:</strong> <?= htmlspecialchars((string)$detalhe['quantidade_total']) ?></p>
    <p><strong>Quantidade disponível:</strong> <?= htmlspecialchars((string)$detalhe['quantidade_disponivel']) ?></p>

    <h2>Autor</h2>
    <p><strong>ID:</strong> <?= htmlspecialchars((string)$detalhe['autor_id']) ?></p>
    <p><strong>Nome:</strong> <?= htmlspecialchars($detalhe['autor_nome']) ?></p>
    <p><strong>Nacionalidade:</strong> <?= htmlspecialchars($detalhe['autor_nacionalidade']) ?></p>

    <h2>Categoria</h2>
    <p><strong>ID:</strong> <?= htmlspecialchars((string)$detalhe['categoria_id']) ?></p>
    <p><strong>Descrição:</strong> <?= htmlspecialchars($detalhe['categoria_descricao']) ?></p>

    <h2>Leitor</h2>
    <p><strong>ID:</strong> <?= htmlspecialchars((string)$detalhe['leitor_id']) ?></p>
    <p><strong>Nome:</strong> <?= htmlspecialchars($detalhe['leitor_nome']) ?></p>
    <p><strong>E-mail:</strong> <?= htmlspecialchars($detalhe['leitor_email']) ?></p>
    <p><strong>Telefone:</strong> <?= htmlspecialchars($detalhe['leitor_telefone']) ?></p>
    <p><strong>Cidade:</strong> <?= htmlspecialchars($detalhe['leitor_cidade']) ?></p>
  <?php } ?>

  <p><a href="lstEmprestimo.php">Voltar</a></p>
</body>
</html>
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe Empréstimo - Sistema Biblioteca</title>
    <link rel="stylesheet" href="/bibliotecasv//view/css/detalhe.css">
</head>
<body>

<div class="detalhe-container">
    <div class="detalhe-box">
        
        <!-- Logo dentro do card -->
        <div class="logo-container">
            <img src="/bibliotecasv/img/logo.jpeg" alt="Logo Biblioteca" class="logo">
        </div>

        <!-- Título com ícone -->
        <div class="titulo-container">
            <h1>Detalhe do Empréstimo</h1>
        </div>
        
        <div class="linha-decorativa"></div>

        <?php if (!$detalhe) { ?>
            <div class="mensagem-vazia">
                ⚠️ Empréstimo não encontrado.
            </div>
        <?php } else { ?>
            <div class="detalhe-grid">
                
                <!-- Seção Empréstimo (Destaque) -->
                <div class="secao secao-destaque">
                    <h2>📋 Dados do Empréstimo</h2>
                    <div class="info-item">
                        <span class="info-label">ID:</span>
                        <span class="info-valor">#<?= htmlspecialchars((string)$detalhe['emprestimo_id']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Status:</span>
                        <span class="status-badge status-<?= strtolower($detalhe['status']) ?>">
                            <?= htmlspecialchars($detalhe['status']) ?>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Data Empréstimo:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['data_emprestimo']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Prevista Devolução:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['data_prevista_devolucao']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Data Devolução:</span>
                        <span class="info-valor"><?= htmlspecialchars((string)$detalhe['data_devolucao']) ?></span>
                    </div>
                </div>

                <!-- Seção Livro -->
                <div class="secao">
                    <h2>📖 Livro</h2>
                    <div class="info-item">
                        <span class="info-label">ID:</span>
                        <span class="info-valor">#<?= htmlspecialchars((string)$detalhe['livro_id']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Título:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['titulo']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Ano:</span>
                        <span class="info-valor"><?= htmlspecialchars((string)$detalhe['ano_publicacao']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Total:</span>
                        <span class="info-valor"><?= htmlspecialchars((string)$detalhe['quantidade_total']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Disponível:</span>
                        <span class="info-valor"><?= htmlspecialchars((string)$detalhe['quantidade_disponivel']) ?></span>
                    </div>
                </div>

                <!-- Seção Autor -->
                <div class="secao">
                    <h2>✍️ Autor</h2>
                    <div class="info-item">
                        <span class="info-label">ID:</span>
                        <span class="info-valor">#<?= htmlspecialchars((string)$detalhe['autor_id']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nome:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['autor_nome']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nacionalidade:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['autor_nacionalidade']) ?></span>
                    </div>
                </div>

                <!-- Seção Categoria -->
                <div class="secao">
                    <h2>📂 Categoria</h2>
                    <div class="info-item">
                        <span class="info-label">ID:</span>
                        <span class="info-valor">#<?= htmlspecialchars((string)$detalhe['categoria_id']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Descrição:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['categoria_descricao']) ?></span>
                    </div>
                </div>

                <!-- Seção Leitor -->
                <div class="secao">
                    <h2>👤 Leitor</h2>
                    <div class="info-item">
                        <span class="info-label">ID:</span>
                        <span class="info-valor">#<?= htmlspecialchars((string)$detalhe['leitor_id']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nome:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['leitor_nome']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">E-mail:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['leitor_email']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Telefone:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['leitor_telefone']) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Cidade:</span>
                        <span class="info-valor"><?= htmlspecialchars($detalhe['leitor_cidade']) ?></span>
                    </div>
                </div>

            </div>
        <?php } ?>

    </div>
    
    <div class="voltar">
        <a href="lstEmprestimo.php">← Voltar para lista de empréstimos</a>
    </div>
</div>

</body>
</html>
>>>>>>> d60fd5f (Trabalho Finalizado)
