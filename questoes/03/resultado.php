<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Resultado das Horas trabalhadas</h2>
    </header>

    <main>
    <main>
    <?php
        // Define as variáveis
        $valorHora = 25.50; // Valor recebido por hora
        $horasTrabalhadas = 160; // Total de horas trabalhadas no mês

        // Calcula o salário bruto
        $salario = $valorHora * $horasTrabalhadas;

        // Formata o salário para o padrão monetário brasileiro (R$)
        $salarioFormatado = number_format($salario, 2, ',', '.');

        // Exibe o resultado
        echo "<p>Valor da hora de trabalho: <strong>R$ " . number_format($valorHora, 2, ',', '.') . "</strong></p>";
        echo "<p>Total de horas trabalhadas no mês: <strong>$horasTrabalhadas</strong></p>";
        echo "<p>O salário total a ser recebido é de <strong>R$ $salarioFormatado</strong>.</p>";
    ?>
</main>
     
    </main>
</body>


</html>
