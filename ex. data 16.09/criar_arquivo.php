<?php
// Nome do arquivo
$nome_arquivo = 'frases.txt';

// Frases a serem gravadas no arquivo
$frases = [
    "Esta é a primeira frase.",
    "Aqui está a segunda frase.",
    "E esta é a terceira frase."
];

// Abrindo o arquivo em modo de escrita ('w') e gravando as frases
$arquivo = fopen($nome_arquivo, 'w');

if ($arquivo) {
    foreach ($frases as $frase) {
        fwrite($arquivo, $frase . PHP_EOL);
    }
    fclose($arquivo);
    echo "Arquivo '$nome_arquivo' criado e frases gravadas com sucesso!";
} else {
    echo "Não foi possível criar o arquivo '$nome_arquivo'.";
}
?>