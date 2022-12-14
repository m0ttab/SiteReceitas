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
    <link rel="stylesheet" type="text/css" href="css/avaliar.css">
<!--===============================================================================================-->
</head>
<body>
    <?php
    include_once 'header.php';
    ?>
    <div class="limiter">
        <div class="container-page" style="background-image: url('images/bg-02.jpg');">
            <div class="rating">
                <a href="javascript:void(0)" onclick="Avaliar(1)">
                <img src="images/icons/star_empty.png" class="star" id="s1"></a>

                <a href="javascript:void(0)" onclick="Avaliar(2)">
                <img src="images/icons/star_empty.png" class="star" id="s2"></a>

                <a href="javascript:void(0)" onclick="Avaliar(3)">
                <img src="images/icons/star_empty.png" class="star" id="s3"></a>

                <a href="javascript:void(0)" onclick="Avaliar(4)">
                <img src="images/icons/star_empty.png" class="star" id="s4"></a>

                <a href="javascript:void(0)" onclick="Avaliar(5)">
                <img src="images/icons/star_empty.png" class="star" id="s5"></a>
                <p id="rating">0</p>
            </div>

            <br><br>
                <div class="button">
                    <button class="rate_btn">Avaliar</button>
                </div>

        </div>
    </div>
<script src="avaliar.js"></script>
</body>

</html>    