<?php
// Função para calcular a tabuada e armazenar no arquivo
function calcularETabular($numero) {
    $nome_arquivo = 'tabuada_' . $numero . '.txt';
    
    // Abrir o arquivo para escrita
    $arquivo = fopen($nome_arquivo, 'w');
    
    if ($arquivo) {
        // Calcular e gravar a tabuada
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $i * $numero;
            fwrite($arquivo, "$i x $numero = $resultado\n");
        }
        fclose($arquivo);
        
        echo "Tabuada do número $numero foi salva em '$nome_arquivo'.<br>";
        echo "Clique <a href='exibir_tabuada.php?arquivo=$nome_arquivo'>aqui</a> para visualizar a tabuada.";
    } else {
        echo "Não foi possível criar o arquivo.";
    }
}

// Verifica se o formulário foi enviado
if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    calcularETabular($numero);
} else {
    echo "Nenhum número foi enviado.";
}
?>
