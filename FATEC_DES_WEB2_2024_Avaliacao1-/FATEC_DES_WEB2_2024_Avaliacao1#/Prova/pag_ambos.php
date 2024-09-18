<?php 

$dsm_sols = 'DSM.txt';
$ge_sols = 'GE.txt';

$vamo_dsm = file_get_contents($dsm_sols);
$vamo_ge = file_get_contents($ge_sols);

echo "<!DOCTYPE html>
<html lang='pt_BR'>
<head>
    <meta charset='UTF-8'>
    <title>Solicitações de ambos os cursos</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
    <style type='text/css'>
    </style>
</head>
<body>
<div class
        <h2>Demandas de DSM</h2>
        <pre> $vamo_dsm </pre>
        
        <h2>Demandas de GE</h2>
        <pre> $vamo_ge </pre>
        <a href='vamo_opcoes.php' class='btn btn-primary'>Voltar</a>
</div>
</body>

</html>";

?>