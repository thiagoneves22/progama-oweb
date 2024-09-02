<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $nota1 = (float) $_POST['nota1'];
    $nota2 = (float) $_POST['nota2'];
    
    // Calcula a média
    $media = ($nota1 + $nota2) / 2;
    
    // Exibe a mensagem
    echo "O aluno " . $nome . " ficou com " . number_format($media, 1, ',', '.') . " de média.";
} else {
    echo "Método de solicitação inválido.";
}
?>