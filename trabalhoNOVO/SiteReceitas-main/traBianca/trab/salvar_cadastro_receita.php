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
    $cadastroReceita->incluirNovaReceita();
    
    header("location: ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-23.webp');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Receita adicionada com sucesso!
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="button-submit">
						<button formaction="add_receita.html" class="login100-form-btn">
							Adicionar mais receitas
						</button>
                        <button formaction="todas_receitas.html" class="login100-form-btn">
							Todas as receitas
						</button>
                        <button formaction="index.html" class="login100-form-btn">
							Página Inicial
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="js/main.js"></script>

</body>
</html>