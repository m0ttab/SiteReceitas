<?php
    include_once 'receita.class.php';

    if(is_null($_POST['nome']) || is_null($_POST['autor']) || is_null($_POST['tempo']) || is_null($_POST['ingredientes']) || is_null($_POST['modo']) || is_null($_POST['tipo']) || is_null($_POST['aviso']) || is_null($_POST['foto'])) return;
            
    $receita = new Receita();
    $receita->set_nome($_POST['nome']);
    $receita->set_autor($_POST['autor']);
    $receita->set_tempo($_POST['tempo']);
    $receita->set_ingredientes($_POST['ingredientes']);
    $receita->set_modo($_POST['modo']);
    $receita->set_tipo($_POST['tipo']);
    $receita->set_aviso($_POST['aviso']);
    $receita->set_foto($_POST['foto']);

    if($receita->validar($_POST['nome'])) {
        $receita->inserir_receita();
        echo '<script>alert("Receita cadastrada com sucesso!");window.location = "http://localhost/SiteReceitas/frontend/index.php"</script>';
    }
    else {
        echo '<script>alert("Não foi possível cadastrar a receita :(");window.location = "http://localhost/SiteReceitas/frontend/index.php"</script>';
    }
    
?>