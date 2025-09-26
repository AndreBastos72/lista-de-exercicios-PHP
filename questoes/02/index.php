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
        <h2>Questão 02: Metros para centimetros</h2>
    </header>

    <main>
        <?php
            // Define o valor em metros
            $metros = 5;

            // Calcula os centímetros (1 metro = 100 centímetros)
            $centimetros = $metros * 100;

            // Exibe o resultado na tela
            echo "<p>O valor de <strong>$metros metros</strong> corresponde a <strong>$centimetros centímetros</strong>.</p>";
        ?>
    </main>
</body>

</html>
