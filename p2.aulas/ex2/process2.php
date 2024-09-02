<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $salarioFixo = (float) $_POST['salario'];
    $valorVendas = (float) $_POST['vendas'];

    // Calcula a comissão (4% das vendas)
    $comissao = $valorVendas * 0.04;

    // Calcula o salário final
    $salarioFinal = $salarioFixo + $comissao;

    // Exibe os resultados
    echo "<h1>Resultado</h1>";
    echo "<p><strong>Salário Fixo:</strong> R$ " . number_format($salarioFixo, 2, ',', '.') . "</p>";
    echo "<p><strong>Comissão (4% das Vendas):</strong> R$ " . number_format($comissao, 2, ',', '.') . "</p>";
    echo "<p><strong>Salário Final:</strong> R$ " . number_format($salarioFinal, 2, ',', '.') . "</p>";
} else {
    echo "Método de solicitação inválido.";
}
?>