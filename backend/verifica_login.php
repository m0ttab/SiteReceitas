<?php

    require 'login.class.php';
    
    if(isset($_POST['nickname']) && isset($_POST['senha'])){

        $login = new login();

        $login->set_nickname($_POST['nickname']);
        $login->set_senha($_POST['senha']);

        if($login->verificar()){

            header('location: SiteReceitas/frontend/index.php');

        }else{

            header('location: SiteReceitas/frontend/login.php');

        }

    }