<?php 

$dsm_sols = 'DSM.txt';

$vamo_dsm = file_get_contents($dsm_sols);

echo "<!DOCTYPE html>
<html lang='pt_BR'>
<head>
    <meta charset='UTF-8'>
    <title>Solicitações DSM</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
    <style type='text/css'>    
    </style>
</head>
<body>
<div class
        <h2>Solocitações DSM</h2>
        <pre> $vamo_dsm </pre>
        <a href='vamo_opcoes.php' class='btn btn-primary'>Voltar</a>  
</div>
</body>

</html>";

?>