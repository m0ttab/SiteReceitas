<?php
    include_once 'lista.class.php';

    if(is_null($_POST['id']) || is_null($_POST['nome'])) return;
            
    $lista = new Lista();
    $lista->set_id($_POST['id']);
    $lista->set_nome($_POST['nome']);

    if (isset($_POST['update'])) $lista->update();
    else $lista->delete();

    header("location: http://localhost/SiteReceitas/lista.php");
?>