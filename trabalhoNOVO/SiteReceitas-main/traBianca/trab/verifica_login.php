<?php

    include_once 'login.class.php';
    
    if(is_null($_POST['nickname']) || is_null($_POST['senha'])) return;
    
    $login = new Login();
    $login->setNickname($_POST['nickname']);
    $login->setSenha($_POST['senha']);
    
    if($login->verificar()) header("location:");
    else header("location:");
?>