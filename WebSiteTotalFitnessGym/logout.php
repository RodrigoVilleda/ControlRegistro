<?php
session_start();

unset($_SESSION['valid_user']);

session_destroy();

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
            <p align="center"> <h1 align="center">ACCESO DENEGADO</h1></p>
<?php
if(!empty($old_user))
{
	echo 'Sesión Cerrada.</br>';
}

else
{
	echo '<p align="center">No habias iniciado sesión, por lo tanto no se ha cerrado la sesión.<br/></p>';
}

?>
<p align="center"><a href="authmain.php">Ingresar Usuario</a></p>

</body>
</html>
