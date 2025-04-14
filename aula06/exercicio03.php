<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Catálogo de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #000;
            color: #fff;
            font-size: 1.1em;
        }
        .eletronico {
            background-color: #6a9e51;
            color: #036400;
        }
        .limpeza {
            background-color: #868650;
            color: #dbdb5b;
        }
        .roupa {
            background-color: #4e8185;
            color: #2a2a6e;
        }
        .alimento {
            background-color: #8b4688;
            color: #ffc0cb;
        }
        h1 {
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Catálogo de Produtos por Categoria</h1>
    <?php
    $listaProdutos = array(
        array("Produto" => "Camiseta", "Valor" => "R$ 49,90", "Tipo" => "roupa"),
        array("Produto" => "Arroz", "Valor" => "R$ 12,50", "Tipo" => "alimento"),
        array("Produto" => "TV", "Valor" => "R$ 2.000", "Tipo" => "eletronico"),
        array("Produto" => "Detergente", "Valor" => "R$ 3,20", "Tipo" => "limpeza"),
        array("Produto" => "Notebook", "Valor" => "R$ 3.499,90", "Tipo" => "eletronico"),
        array("Produto" => "Desinfetante", "Valor" => "R$ 11,90", "Tipo" => "limpeza"),
        array("Produto" => "Bermuda", "Valor" => "R$ 39,90", "Tipo" => "roupa"),
        array("Produto" => "Café", "Valor" => "R$ 34,65", "Tipo" => "alimento")
    );

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Item</th>";
    echo "<th>Preço</th>";
    echo "<th>Classificação</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($listaProdutos as $item) {
        $classeTipo = strtolower($item["Tipo"]);
        echo "<tr class='$classeTipo'>";
        echo "<td>" . $item["Produto"] . "</td>";
        echo "<td>" . $item["Valor"] . "</td>";
        echo "<td>" . ucfirst($item["Tipo"]) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>