<?php
// index.php

// Inclui o arquivo contador.php
include 'contador.php';

// Chama a função para incrementar o contador
$contador = incrementarContador();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Acessos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Contador de Acessos</h1>
        <p>Esta página foi acessada <span class="contador"><?php echo $contador; ?></span> vezes.</p>
    </div>
</body>
</html>