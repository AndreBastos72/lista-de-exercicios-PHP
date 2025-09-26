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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>
        <?php
            // Idade da pessoa em anos
            $idade = 30;

            // Número de dias em um ano (aproximação)
            $diasNoAno = 365;

            // Calcula o total de dias de vida
            $diasDeVida = $idade * $diasNoAno;
            
            // Exibe o resultado
            echo "<p>Se uma pessoa tem <strong>$idade anos</strong> de idade...</p>";
            echo "<h3>Ela já viveu, aproximadamente, <strong>" . number_format($diasDeVida, 0, ',', '.') . " dias</strong>.</h3>";
            echo "<small>(Cálculo aproximado, não considera anos bissextos.)</small>";
        ?>
    </main>
</body>

</html>
