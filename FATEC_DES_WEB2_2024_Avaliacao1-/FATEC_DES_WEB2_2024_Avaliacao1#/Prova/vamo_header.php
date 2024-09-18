<?php
    require_once('vamo_sessao.php'); 
    $dados = new sessao;
    if (!$dados->conta_logada()) {
        header("location: vamo_index.php");
        exit;
    };
?>