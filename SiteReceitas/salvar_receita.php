<?php
    include_once 'receita.class.php';
    include 'receita.class.php';

    session_start();

    if (!$_SESSION['user_id']) return header("location: http://localhost/SiteReceitas/login.php");

    $cadastro = new Cadastro();
    $usuarioLogado = $cadastro->get_cadastro_by_id($_SESSION['user_id']);
    if (!$usuarioLogado['admin']) return header("location: http://localhost/SiteReceitas/login.php");

    if(is_null($_POST['nome']) || is_null($_POST['foto']) || is_null($_POST['autor']) || is_null($_POST['tempo']) || is_null($_POST['ingredientes']) || is_null($_POST['modo']) || is_null($_POST['tipo']) || is_null($_POST['aviso'])) return;
            
    $item = new Receita();
    $item->set_nome($_POST['nome']);
    $item->set_autor($_POST['autor']);
    $item->set_tempo($_POST['tempo']);
    $item->set_ingredientes($_POST['ingredientes']);
	$item->set_modo($_POST['modo']);
	$item->set_tipo($_POST['tipo']);
    $item->set_aviso($_POST['aviso']);
    $item->set_foto($_POST['foto']);
    $item->store();

    header("location: http://localhost/SiteReceitas/todas_receitas.php");
?>