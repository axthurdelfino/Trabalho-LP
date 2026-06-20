<?php
$id = $_GET['id'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Detalhe Emprestimo</title>
</head>
<body>
  <h1>Detalhe Emprestimo</h1>

  <p>ID recebido: <?= htmlspecialchars($id) ?></p>
  <p>Use este arquivo apenas para testar o fluxo de detalhe pelo GET.</p>

  <p><a href="lstEmprestimo.php">Voltar</a></p>
</body>
</html>
