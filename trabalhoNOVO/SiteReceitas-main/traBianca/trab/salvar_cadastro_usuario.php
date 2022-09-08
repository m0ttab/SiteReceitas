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
    $cadastroUsuario->setCondUsuario($_POST['cond']);
    $cadastroUsuario->setImagemUsuario($_POST['imagem']);
    $cadastroUsuario->incluirNovoUsuario();
    
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
		<div class="container-login100" style="background-image: url('images/bg-19.webp');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Usuário criado com sucesso!
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="button-submit">
						<button formaction="login.html" class="login100-form-btn">
							Fazer Login
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