<?php
    include_once 'cadastro_receita.class.php';
    
    session_start();

    if(is_null($_POST['quantidade']) || is_null($_POST['idReceita'])) return;
    if (!$_SESSION['idUsuario']) return header("location: ");

    $listaFeito = new Lista();
    $listaFeito->setQuantidade($_POST['quantidade']);
    $listaFeito->setIdReceita($_POST['idReceita']);
    $listaFeito->setIdCadastro($_SESSION['idUsuario']);

    header("location: ");

?>