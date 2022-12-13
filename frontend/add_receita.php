<!DOCTYPE html>
<html lang="en">
<head>
	<title>Site Receitas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/cadastros.css">
<!--===============================================================================================-->
</head>
<body>
  
<div class="limiter">
    <div class="container-page" style="background-image: url('images/gb-13.webp');">
        <div class="wrap-cadastro p-t-30 p-b-50">
          <form class="cadastro-form validate-form p-b-33 p-t-5" method="POST" action="backend/salvar_receita.php">
  
            <span class="login100-form-title p-b-41">
                ADICIONAR NOVA RECEITA
            </span>
              <div class="row">
                  <div class="col">
                      <div class="wrap-input100 validate-input" data-validate = "Nome">
                        <label for="tempo" class="input100" type="text">Nome</label>
                          <input class="input100" type="text" name="nome" placeholder="Nome da receita">
                      </div>
                  </div>
                  <div class="col">
                      <div class="wrap-input100 validate-input" data-validate="Nickname/Autor">
                        <label for="tempo" class="input100" type="text">Autor</label>
                          <input class="input100" type="text" name="autor" placeholder="@nickname_do_autor">
                      </div>
                  </div>
                  <div class="col">
                    <div class="wrap-input100 validate-input" data-validate = "Tempo de Preparo">
                      <label for="tempo" class="input100" type="text">Tempo de Preparo</label>
                        <input class="input100" type="text" name="tempo" placeholder="00 minutos">
                    </div>
                </div>
              </div>
              
              <div class="row">
                  <div class="col">
                      <div class="wrap-input100 validate-input" data-validate = "Ingredientes">
                        <label for="tempo" class="input100" type="text">Ingredientes</label>
                        <textarea class="input100" name="ingredientes" placeholder="1L de leite, 2 morangos, 500g de chocolate" rows="10" cols="33"></textarea>
                      </div>
                  </div>
  
              <div class="row">
                  <div class="col">
                      <div class="wrap-input100 validate-input" data-validate="Modo de preparo">
                        <label for="tempo" class="input100" type="text">Modo de preparo</label>
                        <textarea class="input100" name="modo" placeholder="1.Corte o morango; 2.Derreta o chocolate" rows="50" cols="33"></textarea>
                      </div>
                  </div>
              </div>
              </div>
  
              <div class="row">
                <div class="col">
                    <div class="wrap-input100 validate-input" data-validate="Tipo">
                      <label for="tempo" class="input100" type="text">Tipo</label>
                        <input class="input100" type="text" name="tipo" placeholder="doce/salgado, almoço/lanche">
                    </div>
                </div>
                  <div class="col">
                      <div class="wrap-input100 validate-input" data-validate = "Aviso aos Alérgicos">
                        <label for="tempo" class="input100" type="text">Aviso aos alérgicos</label>
                          <input class="input100" type="text" name="aviso" placeholder="Contém lactose">
                      </div>
                  </div>
                  <div class="col">
                          <div class="wrap-input100 validate-input" data-validate = "URL da imagem">
                            <label for="tempo" class="input100" type="text">URL da imagem da receita</label>
                              <input class="input100" type="url" name="foto" placeholder="URL da imagem">
                  </div>
              </div>
                  
              </div>
              <div class="button-submit">
              <button type="submit" class="login100-form-btn">
                    Enviar Receita
                </button>
            </div>
          </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
<script src="main.js"></script>

</body>
</html>