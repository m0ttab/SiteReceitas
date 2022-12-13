<?php
    include_once 'cadastro.class.php';

    if(is_null($_POST['nome']) || is_null($_POST['nickname']) || is_null($_POST['email']) || is_null($_POST['senha']) || is_null($_POST['pais']) || is_null($_POST['cond']) || is_null($_POST['pref'])) return;
            
    $cadastro = new Cadastro();
    $cadastro->set_nome($_POST['nome']);
    $cadastro->set_nickname($_POST['nickname']);
    $cadastro->set_email($_POST['email']);
    $cadastro->set_senha($_POST['senha']);
    $cadastro->set_pais($_POST['pais']);
    $cadastro->set_cond($_POST['cond']);
    $cadastro->set_pref($_POST['pref']);

    $cadastro->set_cadastro_admin(0);

    if($cadastro->validar($_POST['nickname'])) {
        $cadastro->inserir_cadastro();
        echo '<script>alert("Conta cadastrada com sucesso!");window.location = "http://localhost/SiteReceitas/index.php"</script>';
    }
    else {
        echo '<script>alert("O email já está cadastrado!");window.location = "http://localhost/SiteReceitas/index.php"</script>';
    }
    
?>