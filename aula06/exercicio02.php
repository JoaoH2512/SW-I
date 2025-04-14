<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Tabelas Dinâmicas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            margin-top: 30px;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 2px solid #333;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #4a2c82;
            color: #ff9e00;
        }
        tr:nth-child(even) {
            background-color: #f0f0f0;
        }
        tr:nth-child(odd) {
            background-color: #d9d9d9;
        }
        form {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
        }
        input[type="number"], input[type="submit"] {
            padding: 8px;
            margin: 5px 0;
        }
        input[type="submit"] {
            background-color: #4a2c82;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Configuração da Tabela</h2>
<form method="post">
    <label>Quantidade de Linhas:</label>
    <input type="number" name="linhas" min="1" required><br><br>

    <label>Quantidade de Colunas:</label>
    <input type="number" name="colunas" min="1" required><br><br>

    <input type="submit" value="Criar Tabela">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalLinhas = $_POST["linhas"];
    $totalColunas = $_POST["colunas"];

    echo "<table>";
    
    // Cabeçalho da tabela
    echo "<tr>";
    $contadorColunas = 1;
    while ($contadorColunas <= $totalColunas) {
        echo "<th>Dado $contadorColunas</th>";
        $contadorColunas++;
    }
    echo "</tr>";

    // Corpo da tabela
    $contadorLinhas = 1;
    while ($contadorLinhas <= $totalLinhas) {
        echo "<tr>";
        $contadorColunas = 1;
        while ($contadorColunas <= $totalColunas) {
            echo "<td>Registro $contadorLinhas-$contadorColunas</td>";
            $contadorColunas++;
        }
        echo "</tr>";
        $contadorLinhas++;
    }

    echo "</table>";
}
?>

</body>
</html>