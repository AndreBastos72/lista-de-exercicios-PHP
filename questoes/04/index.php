<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>
        <?php
            // Dados do problema
            $areaParaPintar = 150; // em metros quadrados (m²)
            $coberturaPorLitro = 3; // cada litro de tinta pinta 3 m²
            $litrosPorLata = 18; // cada lata contém 18 litros
            $precoPorLata = 80.00; // cada lata custa R$ 80,00

            // 1. Calcular quantos litros de tinta são necessários
            $litrosNecessarios = $areaParaPintar / $coberturaPorLitro;

            // 2. Calcular quantas latas são necessárias (arredondando para cima)
            $latasNecessarias = ceil($litrosNecessarios / $litrosPorLata);

            // 3. Calcular o custo total
            $custoTotal = $latasNecessarias * $precoPorLata;

            // Formata o valor final para o padrão monetário brasileiro
            $custoFormatado = number_format($custoTotal, 2, ',', '.');
            
            // Exibe os resultados
            echo "<p>Área a ser pintada: <strong>{$areaParaPintar} m²</strong>.</p>";
            echo "<p>Total de litros de tinta necessários: <strong>" . number_format($litrosNecessarios, 2, ',') . " litros</strong>.</p>";
            echo "<p>Você precisará comprar <strong>{$latasNecessarias}</strong> lata(s) de tinta.</p>";
            echo "<h3>O custo total será de <strong>R$ {$custoFormatado}</strong>.</h3>";
        ?>
    </main>
</body>

</html>
