<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

function exigirLogin(): void
{
  if (!isset($_SESSION['usuario'])) {
    header("Location: /bibliotecasv/VIEW/index.php");
    exit;
  }
}

