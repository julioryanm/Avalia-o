<?php
class sessao{
public function logar ($login, $senha){
    session_start();
    if ($login == 'tecnicos' and $senha == 'tecnicos' or $login == 'coordenacao' and $senha == 'coordenacao'  ){
        $_SESSION ['logado'] = TRUE;
        $_SESSION ['usuario'] = $login;
        return TRUE;
    }
    else {
        
        $_SESSION ['logado'] = FALSE;
        return FALSE;
    }
}
public function sair(){
session_start();
$_SESSION = array();
session_destroy();
}
public function conta_logada () {
    session_start();
    if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
        return FALSE;
    }
    return TRUE;
}
}



