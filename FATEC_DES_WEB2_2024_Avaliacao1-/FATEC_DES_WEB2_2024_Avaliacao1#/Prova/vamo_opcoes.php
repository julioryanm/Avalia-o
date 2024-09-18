<?php

require('vamo_header.php');

$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Opções</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        
        
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Bem Vindo</h2>
        <p>Pessoa: <strong><?php echo htmlspecialchars($usuario); ?></strong></p>
        <p>Opçoes de consulta:</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <a href="pag_ge.php" class="btn btn-primary">Consultar Solicitações de GE</a>
            </div>
            <div class="form-group">
            <a href="pag_dsm.php" class="btn btn-primary">Consultar Solicitações de DSM</a> 
                <span class="help-block"></span>
            </div>
            <div class="form-group">
            <a href="pag_ambos.php" class="btn btn-primary">Consultar todas as Solicitações</a> 
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
          <?php   if ($usuario === "coordenacao") :  ?>
          <a href="vamo_demanda.php" class="btn btn-primary">Criar uma Solicitação</a>
          <?php endif ?>
          </div>   
          <div class="form-group">
            <a href="vamo_logout.php" class="btn btn-danger">Sair da Conta</a>
            </div>
        </form>
    </div>    
</body>

</html>