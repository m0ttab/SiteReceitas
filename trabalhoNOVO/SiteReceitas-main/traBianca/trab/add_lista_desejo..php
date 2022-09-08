<?php
    include_once 'cadastro_receita.class.php';
    
    session_start();

    if(is_null($_POST['quantidade']) || is_null($_POST['idReceita'])) return;
    if (!$_SESSION['idUsuario']) return header("location: ");

    $listaDesejo = new Lista();
    $listaDesejo->setQuantidade($_POST['quantidade']);
    $listaDesejo->setIdReceita($_POST['idReceita']);
    $listaDesejo->setIdCadastro($_SESSION['idUsuario']);

    header("location: ");

?>