<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/DAL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/bibliotecasv/VIEW/seguranca.php";

exigirLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$dalEmprestimo = new \DAL\Emprestimo();
$detalhe = $dalEmprestimo->SelectDetalhe($id);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
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
