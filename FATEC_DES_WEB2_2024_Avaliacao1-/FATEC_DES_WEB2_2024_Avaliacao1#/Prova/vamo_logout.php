<?php
    require_once('vamo_sessao.php'); 
    $dados = new Sessao;
    $dados->sair();
    header("location: vamo_index.php");
exit;
?>
