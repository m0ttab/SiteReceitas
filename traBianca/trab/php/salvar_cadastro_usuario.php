<?php
    include_once 'cadastro_usuario.class.php';

    if(is_null($_POST['nome']) || is_null($_POST['nickname']) || is_null($_POST['senha']) || is_null($_POST['email']) || is_null($_POST['genero'])
        || is_null($_POST['pais']) || is_null($_POST['pref']) || is_null($_POST['cond']) || is_null($_POST['imagem'])) return;
            
    $cadastroUsuario = new Cadastro();
    $cadastroUsuario->setNomeUsuario($_POST['nome']);
    $cadastroUsuario->setNicknameUsuario($_POST['nickname']);
    $cadastroUsuario->setSenhaUsuario($_POST['senha']);
    $cadastroUsuario->setEmailUsuario($_POST['email']);
    $cadastroUsuario->setGeneroUsuario($_POST['genero']);
    $cadastroUsuario->setPaisUsuario($_POST['pais']);
    $cadastroUsuario->setPrefUsuario($_POST['pref']);
    $cadastroUsuario->setCondicaoUsuario($_POST['cond']);
    $cadastroUsuario->setImagemUsuario($_POST['imagem']);
    $cadastroUsuario->setTermoUsuario($_POST['termo']);
    $cadastroUsuario->setAdminCadastro(0);
    $cadastroUsuario->incluirCadastro();
    
    header("location: ");
?>