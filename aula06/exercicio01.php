<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th {
            color: orange;
            background-color: rgb(122, 32, 122);
            padding: 12px;
        }
        th, td {
            text-align: center;
            border: 1px solid #ddd;
            padding: 10px;
        }
        tr:nth-child(even) {
            background-color: rgb(141, 37, 37);
            color: white;
        }
        tr:nth-child(odd) {
            background-color: rgb(81, 54, 179);
            color: white;
        }
    </style>
</head>
<body>
    <h2>Tabela</h2>
    <table>
        <thead>
            <tr>
                <th>Dado A</th>
                <th>Dado B</th>
                <th>Dado C</th>
                <th>Dado D</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $numeroLinhas = 8;
            $numeroColunas = 4;
            
            for ($linha = 1; $linha <= $numeroLinhas; $linha++) {
                echo "<tr>";
                for ($coluna = 1; $coluna <= $numeroColunas; $coluna++) {
                    echo "<td>Item $linha-$coluna</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>