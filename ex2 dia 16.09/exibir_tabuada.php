<?php
// Verifica se o parâmetro 'arquivo' foi passado na URL
if (isset($_GET['arquivo'])) {
    $nome_arquivo = $_GET['arquivo'];
    
    // Verifica se o arquivo existe
    if (file_exists($nome_arquivo)) {
        // Ler o conteúdo do arquivo
        $conteudo = file_get_contents($nome_arquivo);
        echo "<h2>Conteúdo do arquivo '$nome_arquivo':</h2>";
        echo nl2br(htmlspecialchars($conteudo));
    } else {
        echo "Arquivo não encontrado.";
    }
} else {
    echo "Nenhum arquivo especificado.";
}
?>
