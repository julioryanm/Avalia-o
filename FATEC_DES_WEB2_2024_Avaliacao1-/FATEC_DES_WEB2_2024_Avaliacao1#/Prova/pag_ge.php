<?php 

$ge_sols = 'GE.txt';

$vamo_ge = file_get_contents($ge_sols);

echo "<!DOCTYPE html>
<html lang='pt_BR'>
<head>
    <meta charset='UTF-8'>
    <title>Solicitações GE</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
    <style type='text/css'>    
    </style>
</head>
<body>
<div class
        <h2>Solicitações GE</h2>
        <pre> $vamo_ge </pre>
        <a href='vamo_opcoes.php' class='btn btn-primary'>Voltar</a>  
</div>
</body>

</html>";

?>