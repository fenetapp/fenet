<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prueba de conexión mysql.</title>
	<style type="text/css">
		html {
			font-family: proximanova;
		}
		body {
			margin: 0;
		}
		header {
			text-align: center;
			color: #286090;
			border-bottom: solid 5px #F25C27;
			margin: 0;
			height: 50px;
			width: 100%;
			padding: 15px;
		}
		header h1 {
			margin: auto;
			padding: 0px;
		}
		.container {
			display: block;
			text-align: center;
			background-color: rgb(220,220,220);
			border-radius: 5px;
			padding: 10px;
			width: 75%;
			margin: 1em auto;
		}
		.exito {
			color: green;
		}
		.fallo {
			color: red;
		}
	</style>
</head>
<body>
	<header><h1>Prueba de conexión MySQL. Cortesía de servicioshosting.com</h1></header>
	<div class="container">
		<?php 
			$servidor = "localhost";              //Nombre de servidor
			$usuario = "fenetcom_prueba";         //Se coloca el nombre de usuario que corresponda.
			$clave = "r5qud4wLVdYo";              //Contraseña
			$db = "fenetcom_prueba_conex";        //Nombre de la base de datos.
			$conexion=mysqli_connect("$servidor","$usuario","$clave","$db");
			
			if($conexion):
		?>
			<h2 class="exito">Conexión exitosa</h2>
			<p>Error <?=mysqli_get_host_info($conexion)?></p>
		<?php else: ?>
			<h2 class="fallo">Conexión fallida:</h2>
			<p><?=mysqli_connect_error()?></p>
		<?php 
			endif;
		?>	
	</div>
	<div class="container">
		<?php 
			$servidor = "localhost";              //Nombre de servidor
			$usuario = "fenetcom_admin";         //Se coloca el nombre de usuario que corresponda.
			$clave = "hdwtnkue456";              //Contraseña
			$db = "fenetcom_fenet";        //Nombre de la base de datos.
			$conexion=mysqli_connect("$servidor","$usuario","$clave","$db");
			
			if($conexion):
		?>
			<h2 class="exito">Conexión exitosa</h2>
			<p>Error <?=mysqli_get_host_info($conexion)?></p>
		<?php else: ?>
			<h2 class="fallo">Conexión fallida:</h2>
			<p><?=mysqli_connect_error()?></p>
		<?php 
			endif;
		?>	
	</div>
</body>
</html>