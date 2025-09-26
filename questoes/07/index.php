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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>
        <?php
            // Número para calcular o fatorial
            $numero = 5;

            // Inicia a variável do fatorial com 1 (caso base para multiplicação)
            $fatorial = 1;
            
            // Exibe o início do resultado
            echo "<p>Calculando o fatorial de <strong>$numero</strong>:</p>";
            echo "<p>$numero! = ";

            // Loop para calcular o fatorial
            // Começa do número e vai diminuindo até 1
            for ($i = $numero; $i >= 1; $i--) {
                $fatorial *= $i; // Multiplica o resultado atual pelo número do loop
                
                // Monta a string de exibição do cálculo
                echo $i;
                if ($i > 1) {
                    echo " x ";
                }
            }
            
            // Exibe o resultado final
            echo " = <strong>$fatorial</strong></p>";
        ?>
    </main>
</body>

</html>
