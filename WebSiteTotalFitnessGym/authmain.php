<?php
session_start();
if (isset($_POST['userid']) && isset($_POST['password']))
 {
 	$userid = $_POST['userid'];

 	$password = $_POST['password'];

 	$db_conn = new mysqli('localhost','root','','auth');

 	if(mysqli_connect_errno()){

 		echo 'Fallo la conexión a la base de datos: '.
 		mysqli_connect_errno();

 		exit();
 	}

 	$query = 'select * from authorized_users '
 	."where name='$userid' "
 	." and password='$password'";

 	$result = $db_conn->query($query);

 	if ($result->num_rows)

 	{
 		$_SESSION['valid_user'] = $userid;

 	}

 	$db_conn->close();

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

            <h2 align="center">INICIAR SESION </h2>
<?php
if (isset($_SESSION['valid_user'])) 
{
	echo 'Sesion: '.$_SESSION['valid_user'].' <br/>';
	echo '<p align="center"><a href="members_only.php" id="lnk-index">Ingresar Al Sistema</a></p>';
}
else
{
	if(isset($userid)){
		echo '<p align="center">No fue posible iniciar sesión.</p><br/>';
	}
	else
	{
		echo '<p align="center">No has iniciado sesión.</p><br/>';
	}

	echo '<form method="post" action="authmain.php">';
	echo '<table border=1 align="center" bgcolor="red">';
	echo '<tr><td>Usuario: </td>';
	echo '<td><input type="text" name="userid"></td></tr>';
	echo '<tr><td>Contraseña: </td>';
	echo '<td><input type="password" name="password"></td></tr>';
	echo '<tr ><td colspan="2" align="center">';
	echo '<input type="submit" value="Iniciar sesión"></td></tr>';
	echo '</table></form>';
}
?>
<br />
<p align="center"><a href="logout.php">Ingresar Sin Registro</a></p>

</body>
</html>