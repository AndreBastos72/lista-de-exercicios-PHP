<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
    
    <header>
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>
        <?php
            $numero = 10; // Você pode trocar este número por qualquer outro
            $antecessor = $numero - 1;

            echo "<p>O número escolhido foi <strong>$numero</strong>.</p>";
            echo "<p>O seu antecessor é <strong>$antecessor</strong>.</p>";
        ?>
    </main>

</body>
</html>
