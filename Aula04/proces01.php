<?php
$nome = $_GET['nome'];
$nota01 = $_GET['nota01'];
$nota02 = $_GET['nota02']; 
$nota03 = $_GET['nota03'];  
   
$media = ($nota01 + $nota02 + $nota03)/3 ;

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nome do Estudante: <?php echo $name?></p>
    <p>Média: <?php echo number_format($media)?></p>
</body>
</html>