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
    <link rel="stylesheet" type="text/css" href="css/cadastros.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-page" style="background-image: url('images/bg-18.jpg');">
            <div class="wrap-cadastro p-t-30 p-b-50">
              <form class="cadastro-form validate-form p-b-33 p-t-5" method="POST" action="salvar_cadastro.php">
      
                <span class="login100-form-title p-b-41">
                    CRIAR CONTA
                </span>
                  <div class="row">
                      <div class="col">
                          <div class="wrap-input100 validate-input" data-validate = "Nome">
                            <label for="nome" class="input100" type="text">Nome Completo</label>
                              <input class="input100" type="text" name="nome" placeholder="Seu nome">
                          </div>
                      </div>
                      <div class="col">
                          <div class="wrap-input100 validate-input" data-validate="Nickname/Autor">
                            <label for="nickname" class="input100" type="text">Nickname</label>
                              <input class="input100" type="text" name="nickname" placeholder="@nickname">
                          </div>
                      </div>
                      <div class="col">
                        <div class="wrap-input100 validate-input" data-validate = "E-mail">
                          <label for="email" class="input100" type="text">E-mail</label>
                          <input class="input100" type="email" name="email" placeholder="email@email.com">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col">
                        <div class="wrap-input100 validate-input" data-validate = "Senha">
                          <label for="senha" class="input100" type="text">Senha</label>
                            <input class="input100" type="password" name="senha">
                        </div>
                    </div>
                     
                      <div class="col">
                        <div class="wrap-input100 validate-input" data-validate="País">
                          <label for="pais" class="input100" type="text">País</label>
                            <input class="input100" type="text" name="pais" placeholder="Brasil-BR">
                        </div>
                    </div>
                  </div>
      
                  <div class="row">
                    <div class="col">
                        <div class="wrap-input100 validate-input" data-validate="Preferência Alimentar">
                          <label for="pref" class="input100" type="text">Preferência Alimentar</label>
                            <input class="input100" type="text" name="pref" placeholder="Doce/Salgado">
                        </div>
                    </div>
                      <div class="col">
                          <div class="wrap-input100 validate-input" data-validate = "Condição Alimentar Especial">
                            <label for="tempo" class="input100" type="text">Condição Alimentar Especial</label>
                              <input class="input100" type="text" name="cond" placeholder="Intolerante a lactose//Não">
                          </div>
                      </div>  
                  </div>

                  <div class="row">
                        <div class="wrap-input100 validate-input" data-validate="Termo">
                            <label class="input100"><input type="checkbox" name="termo">    Li e Concordo com os Termos de Uso</label>
                        </div>
                  </div>

                  <div class="button-submit">
                  <button type="submit" formaction="salvar_cadastro_usuario.php" class="login100-form-btn">
                        CRIAR CONTA
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



