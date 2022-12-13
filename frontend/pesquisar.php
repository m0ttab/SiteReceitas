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
    <link rel="stylesheet" type="text/css" href="css/todas_receitas.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-03.jpg');">
            <div class="wrap-avalia">
<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "sitereceitas";
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['search'];
    $result = "SELECT * FROM receita WHERE ingredientes OR nome LIKE '%$pesquisar%'";
    $resultado = mysqli_query($conn, $result);
    
    while($rows = mysqli_fetch_array($resultado)){
        echo " <div class='row'>
                        <div class='col'>
                            <div class='card'>
                                <div class='card-body'>
                                  <h5 class='card-title'>".$rows['nome']."</h5>
                                  <p class='card-text'>".$rows['tipo']."</p>
                                  <a href='#' class='btn'>Ver receita</a>
                                </div>
                                <img src=".$rows['imagem']." class='card-img-top'>
                              </div>
                        </div>
                        </div>
        ";
    }
?>

</div>
</div>
</div>
</body>