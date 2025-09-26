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
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>
        <?php
            // Define os três números
            $num1 = 50;
            $num2 = 99;
            $num3 = 12;

            // Coloca os números em um array (uma lista)
            $numeros = [$num1, $num2, $num3];

            // Ordena o array em ordem decrescente (do maior para o menor)
            rsort($numeros);

            // Exibe os resultados
            echo "<p>Os números fornecidos foram: <strong>$num1, $num2, $num3</strong>.</p>";
            echo "<h3>A ordem decrescente é: <strong>" . implode(', ', $numeros) . "</strong>.</h3>";
        ?>
    </main>
</body>

</html>
