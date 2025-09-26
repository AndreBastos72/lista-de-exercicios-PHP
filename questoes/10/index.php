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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>
        <?php
            // Total de segundos para conversão
            $totalSegundos = 4000;

            // 1. Calcula o total de horas (dividindo por 3600 e pegando a parte inteira)
            $horas = floor($totalSegundos / 3600);

            // 2. Pega o resto de segundos que sobraram após extrair as horas
            $resto = $totalSegundos % 3600;

            // 3. Calcula os minutos a partir do resto (dividindo por 60)
            $minutos = floor($resto / 60);

            // 4. Pega o resto final, que são os segundos
            $segundos = $resto % 60;
            
            // Exibe os resultados
            echo "<p>O valor de <strong>" . number_format($totalSegundos, 0, ',', '.') . " segundos</strong> corresponde a:</p>";
            echo "<h3>{$horas} hora(s), {$minutos} minuto(s) e {$segundos} segundo(s).</h3>";
        ?>
    </main>
</body>

</html>
