<?php

require_once('vamo_sessao.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $dados = new sessao;
    if($dados->logar($_POST['login'], $_POST['senha'])) {
            header("location: vamo_opcoes.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
      
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Favor informar abaixo o login e a senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="login" id="login" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Acessar">
            </div>
        </form>
    </div>    
</body>

</html>