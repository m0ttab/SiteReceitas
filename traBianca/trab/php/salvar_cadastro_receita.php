<?php
    include_once 'cadastro_receita.class.php';

    if(is_null($_POST['nome']) || is_null($_POST['nickname']) || is_null($_POST['tempo']) || is_null($_POST['tipo']) || is_null($_POST['ingredientes']) ||
        is_null($_POST['modo']) || is_null($_POST['aviso']) || is_null($_POST['imagem'])) return;
            
    $cadastroReceita = new Cadastro();
    $cadastroReceita->setNomeReceita($_POST['nome']);
    $cadastroReceita->setAutorReceita($_POST['nickname']);
    $cadastroReceita->setTempoReceita($_POST['tempo']);
    $cadastroReceita->setTipoReceita($_POST['tipo']);
    $cadastroReceita->setIngredientesReceita($_POST['ingredientes']);
    $cadastroReceita->setModoReceita($_POST['modo']);
    $cadastroReceita->setAvisoReceita($_POST['aviso']);
    $cadastroReceita->setImagemReceita($_POST['imagem']);
    $cadastroReceita->setAdminCadastro(0);
    $cadastroReceita->incluirNovaReceita();
    
    header("location: ");
?>