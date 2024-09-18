<?php
require ('vamo_header.php');

if ($_SESSION['usuario'] !== 'coordenacao') {
    header("Location: vamo_opcoes.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    </style>
</head>
<body>
    <div class='wrapper'>
        <h2>Solicitações</h2>
        <p>Colocar as seguintes informações:</p>
        <form action="vamo_cadastro.php" method="POST">
            <div class="form-group">
                <label>Laboratório</label>
                <br>
                <select class="custom-select form-control" name="Laboratório" id="lab">
    <option selected >Laboratório 1</option>
    <option>Laboratório 2</option>
    <option>Laboratório 3</option>
  </select>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Prazo</label>
                <input type="date" name="Prazo" id="prazo" class="form-control" value = "">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
            <label>Solicitação</label>
            <input type="text" name="Solocitação" id="sol" class="form-control" value = "">
            </div>
            <div class="form-group">
                <label>Curso</label>
               <br>
            <select class="custom-select form-control" name ="Curso" id="Curso">
    <option selected value="DSM">D.S.M.</option>
    <option value="GE">G.E.</option>
  </select>
        </form>
        <br>
        <input type="submit" class="btn btn-success" value="Enviar">
        <br>
        <br>
        <a href="vamo_opcoes.php" class="btn btn-primary">Voltar</a>
    </div>    
</body>

</html>