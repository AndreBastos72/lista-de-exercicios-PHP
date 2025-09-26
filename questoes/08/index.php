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
        <h2>Questão 08: Números Ímpares</h2>
    </header>

    <main>
        <?php
            echo "<h3>Números ímpares de 1 a 20:</h3>";
            echo "<p>";

            // Loop que começa em 1 e incrementa de 2 em 2
            for ($i = 1; $i <= 20; $i += 2) {
                echo $i . " "; // Exibe o número ímpar seguido de um espaço
            }

            echo "</p>";
        ?>
    </main>
</body>

</html>
