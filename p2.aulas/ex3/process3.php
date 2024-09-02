<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $baseMaior = (float) $_POST['base_maior'];
    $baseMenor = (float) $_POST['base_menor'];
    $altura = (float) $_POST['altura'];

    // Calcula a área do trapézio
    $area = (($baseMaior + $baseMenor) * $altura) / 2;

    // Exibe o resultado
    echo "<h1>Resultado</h1>";
    echo "<p><strong>Base Maior:</strong> " . number_format($baseMaior, 2, ',', '.') . "</p>";
    echo "<p><strong>Base Menor:</strong> " . number_format($baseMenor, 2, ',', '.') . "</p>";
    echo "<p><strong>Altura:</strong> " . number_format($altura, 2, ',', '.') . "</p>";
    echo "<p><strong>Área do Trapézio:</strong> " . number_format($area, 2, ',', '.') . "</p>";
} else {
    echo "Método de solicitação inválido.";
}
?>