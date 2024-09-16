<?php
// Nome do arquivo
$nome_arquivo = 'frases.txt';

// Abrindo o arquivo em modo de leitura ('r') e lendo seu conteúdo
$arquivo = fopen($nome_arquivo, 'r');

if ($arquivo) {
    $conteudo = fread($arquivo, filesize($nome_arquivo));
    fclose($arquivo);
    echo "Conteúdo do arquivo:\n";
    echo nl2br(htmlspecialchars($conteudo));
} else {
    echo "Não foi possível abrir o arquivo '$nome_arquivo'.";
}
?>

