<?php 
include("backend/Conn.class.php"); 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sitereceitas";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result = "SELECT * FROM cadastro";
$resultado = mysqli_query($conn, $result);?> 

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
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
<!--===============================================================================================-->
</head>
<body>

  <?php
  include_once 'header.php';
  ?>
          <div class="limiter">
            <div class="container-page" style="background-image: url('images/bg-02.jpg');">
              <div class="wrap-login100 p-t-30 p-b-50">
                <form class="search-form validate-form p-b-33 p-t-5">
                  <img href="images/icons/user.png" width="100%" height="11%">
                    <span class="login100-form-title p-b-41"></span>
              <div class="row">
                <table> 
                  <tr> 
                  <td>Nome</td> 
                  <td>Nickname</td> 
                  <td>E-mail</td> 
                  <td>País</td> 
                  <td>Cond</td> 
                  <td>Pref</td>
                </tr> 
        <?php while($dado = $con->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['nome']; ?></td>
          <td><?php echo $dado['nickname']; ?></td> 
          <td><?php echo $dado['email']; ?></td> 
          <td><?php echo $dado['pais']; ?></td> 
          <td><?php echo $dado['cond']; ?></td> 
          <td><?php echo $dado['pref']; ?></td> 
        </tr> 
        <?php } ?> 
      </table> 
                
            </div>
  </form>
              </div>
            </div>
          </div>
</div>
<script src="index.js"></script>
</body>

</html>    
