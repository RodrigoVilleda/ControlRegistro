<html>
<head>
<title>Registro de un socio
</title>
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

            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="index.html" id="lnk-index">INICIO</a>
                    <a href="control.html" id="lnk-control">CONTROL</a>
                    <a href="inscripcion.html" id="lnk-inscripcion">INSCRIPCION</a>
                    <a href="ingresar.html" id="lnk-ingresar">INGRESAR</a>
                    <a href="modificar.html" id="lnk-modificar">MODIFICAR</a>
                    <a href="registro.html" id="lnk-registro">REGISTRO</a>
                </div>

     
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
        </header>
        
        <div class="row">
                <div class="col-md-12 text-left">
                    <a href="ingresarSocio.html" id="lnk-socio">Socio</a>
                    <a href="ingresarInstructor.html" id="lnk-instructor">Instructor</a>
                    <a href="ingresarHorario.html" id="lnk-horario">Horario</a>
                    <a href="ingresarRutina.html" id="lnk-rutina">Rutina</a>
                </div>
    </div>

	<table border=1 align="center" bgcolor="#B40404">
      <tr align="center"><td><header class="row">

                <div class="col-md-12">
                   <h2>Has ingresado un nuevo socio</h2>
                
            </div>
            
    </div><td></tr></table>
<p>
	
	<?php
	$nombre = $_POST["nombre"];
    $nombre=strtoupper($nombre);
    $edad = $_POST["edad"];
    $fecha = $_POST["fechaInscripcion"];
    $estatura = $_POST["estatura"];
    $estatura=strtoupper($estatura);
    $peso = $_POST["peso"];
    $peso=strtoupper($peso);
    $huella = $_POST["huella"];


	$dbc=mysqli_connect('localhost','root','','totalfitnessgym') or die('Error al realizar la conexion con el servidor MySQL');
        $query="INSERT INTO socio (nombre,edad,fecha_inscripcion,estatura,peso,huella) VALUES ('$nombre','$edad','$fecha', '$estatura', '$peso','$huella')";
        $result=mysqli_query($dbc,$query) or die('Error al ejecutar la intruccion SQL');
        mysqli_close($dbc); 


	

?>

	</P>

</body>


