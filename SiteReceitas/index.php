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
    <link rel="stylesheet" type="text/css" href="css/index.css">
<!--===============================================================================================-->
</head>
<body>
  <?php
  include_once 'header.php';
  ?>
          <div class="limiter">
            <div class="container-page" style="background-image: url('images/bg-06.jpg');">
              <div class="wrap-login100 p-t-30 p-b-50">
                <form class="search-form validate-form p-b-33 p-t-5" method="POST" action="pesquisar.php">
        
                  <div class="barra">
                    <input id="searchbar" onkeyup="search()" type="search" list="datalistOptions" name="search"
                    placeholder="O que têm na sua geladeira?">
                    <button type="search" class="btn_search"><img src="images/icons/pesquisa.png" width="50%" height="50%"></button>
                </div>
                </form>
              </div>
            </div>
          </div>

          
<script src="js/index.js"></script>
</body>

</html>    
