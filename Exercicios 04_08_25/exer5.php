<?php
    // Verifica se os dados foram enviados via GET
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['capital'], $_GET['taxa'], $_GET['tempo'])) {
        $capital = floatval($_GET['capital']);
        $taxa_porcentagem = floatval($_GET['taxa']);
        $tempoTotal = intval($_GET['tempo']);
        $taxa = $taxa_porcentagem / 100;

        echo "<h2>Tabela de Juros Simples</h2>";
        echo "<p>Capital Inicial: R$ " . number_format($capital, 2, ',', '.') . "</p>";
        echo "<p>Taxa de Juro: " . number_format($taxa_porcentagem, 2, ',', '.') . "% ao ano</p>";
        echo "<p>Tempo Total: " . $tempoTotal . " anos</p>";

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Tempo (anos)</th>";
        echo "<th>Montante (R$)</th>";
        echo "<th>Juros (R$)</th>";
        echo "</tr>";

        // Linha para o tempo 0 (capital inicial)
        echo "<tr>";
        echo "<td>0</td>";
        echo "<td>" . number_format($capital, 2, ',', '.') . "</td>";
        echo "<td>" . number_format(0, 2, ',', '.') . "</td>";
        echo "</tr>";
        
        // Loop para calcular e exibir cada ano
        for ($t = 1; $t <= $tempoTotal; $t++) {
            $juros_acumulado = $capital * $taxa * $t;
            $montante = $capital + $juros_acumulado;

            echo "<tr>";
            echo "<td>" . $t . "</td>";
            echo "<td>" . number_format($montante, 2, ',', '.') . "</td>";
            echo "<td>" . number_format($juros_acumulado, 2, ',', '.') . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>Por favor, forneça os valores de capital, taxa e tempo.</p>";
    }
    ?>