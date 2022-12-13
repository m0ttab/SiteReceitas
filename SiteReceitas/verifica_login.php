<?php

    include_once 'Login.class.php';
    
    if(is_null($_POST['nickname']) || is_null($_POST['senha'])) return;
    
    $login = new Login();
    
    $login->set_nickname($_POST['nickname']);
    $login->set_senha($_POST['senha']);
    
    if($login->verificar()) header("location: http://localhost/SiteReceitas/todas_receitas.php");
    else echo  "<script>alert('Não foi possível realizar o login!);</script>";
    header("location: http://localhost/SiteReceitas/login.php");
?>