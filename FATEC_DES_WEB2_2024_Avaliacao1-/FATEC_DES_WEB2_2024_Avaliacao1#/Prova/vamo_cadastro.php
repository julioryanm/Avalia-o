<?php
require('vamo_header.php');

$lab = $_POST['Laboratório'];
$prazo = $_POST['Prazo'];
$sol = $_POST['Solocitação'];
$curso = $_POST['Curso'];
if ($curso === 'DSM')  {
    $fp = fopen('DSM.txt', 'a');
}
elseif ($curso === 'GE') {
    $fp = fopen('GE.txt', 'a');
}
fwrite($fp, $lab);
fwrite($fp, "|");
fwrite($fp, $prazo);
fwrite($fp, "|");
fwrite($fp, $sol);
fwrite($fp, "\n" );
fclose($fp);
?>
<!DOCTYPE html>
<html lang="pt_BR"> 
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    </style>
</head>
<body>
    <label> Tudo certinho por aqui, já foi encaminhada sua solicitação! </label>
<br>
    <a href="vamo_opcoes.php" class="btn btn-primary">Voltar</a>
</body>
        
</html>