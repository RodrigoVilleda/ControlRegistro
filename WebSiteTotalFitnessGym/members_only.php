<?php
session_start();

if(isset($_SESSION['valid_user']))
{
	echo '<p>Sesion: '.$_SESSION['valid_user'].'</p>';

}
else
{
}

?>
<html>
<head>

    <title></title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>

        <link href="BarNavigation.css" rel="stylesheet" type="text/css">

    <!--
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    -->

    <link href="css/styles.css" rel="stylesheet">

</head>

<body background="fondo1/fondo.jpg">
    <div class="container">
        <header class="row">
            <div class="col-md-6">
                <img src="images/7.jpg" class="img-rounded" alt="" width="225" helght="100">
            </div>
            <div class="col-md-6 text-right">
                <p ><img src="images/2.jpg" class="img-rounded" alt="" width="500" helght="150"></p>
            </div>

            <h2 align="center">BIENVENIDOS </h2>

<br />

<p align="center"><a href="index.html">Mostrar Men&uacute Principal</a></p>
<p align="center"><a href="authmain.php">Salir</a></p>

</body>
</html>