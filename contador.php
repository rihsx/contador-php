<?php
// contador.php

function incrementarContador() {
    // Verifica se o arquivo contador.txt existe
    if (!file_exists('contador.txt')) {
        // Se o arquivo não existir, cria e inicializa com 0
        file_put_contents('contador.txt', '0');
    }

    // Lê o valor atual do contador
    $contador = file_get_contents('contador.txt');
    
    // Incrementa o valor do contador
    $contador = (int)$contador + 1;

    // Salva o valor atualizado de volta no arquivo
    file_put_contents('contador.txt', $contador);

    // Retorna o valor atualizado do contador
    return $contador;
}
?>