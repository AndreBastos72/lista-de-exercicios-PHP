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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>
        <?php
            // Define os três números para comparação
            $num1 = 45;
            $num2 = 82;
            $num3 = 33;

            // Usa a função max() para encontrar o maior valor entre eles
            $maiorNumero = max($num1, $num2, $num3);

            // Exibe os números e o resultado
            echo "<p>Os números fornecidos foram: <strong>$num1</strong>, <strong>$num2</strong> e <strong>$num3</strong>.</p>";
            echo "<h3>O maior número entre eles é o <strong>$maiorNumero</strong>.</h3>";
        ?>
    </main>
</body>

</html>
