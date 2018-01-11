<?php
	require("cnx.php");
	$ticket3      = $_POST['servicio'];
	$contenido3   = $_POST['contenido'];
	$seguimiento3 = "Proveedor";
	$fecha3       = $_POST['fecha2'];
	$hora3        = $_POST['hora2'];
	$proveedor    = $_POST['idProveedor'];  

	mysql_query ("INSERT INTO seguimientos VALUES ('', '".$ticket3."', '".$idUsuario."', '".$contenido3."', '".$seguimiento3."', '".$proveedor."', '".substr($fecha3,6,4).'-'.substr($fecha3,3,2).'-'.substr($fecha3,0,2)."', '".$hora3."')");
	$consulta = "UPDATE tickets SET seguimientos = '".$seguimiento3."' WHERE ticket = ".$ticket3;     
	$hacerconsulta = mysql_query ($consulta);
	//Bloque de comando para incrementar el ra y rs cuando se realiza el seguimiento
	/*
		$ssql = mysql_query("SELECT * FROM tickets WHERE ticket='$ticket3'");           
		$rc  =  mysql_result($ssql,0,"rc");
		$rs  =  mysql_result($ssql,0,"rs");
		$rcnew = $rc+1;
		$rsnew = $rs+1;
		$consulta4 = "UPDATE tickets SET 
		rc ='$rcnew', rs='$rsnew' WHERE ticket=$ticket3" ;
		$hacerconsulta = mysql_query ($consulta4);
		mysql_close($conexion);   
	*/
    $to         = "appfenet@gmail.com";
    $subject    = $seguimiento3." - ".$ticket3;            
    $from       = "info@fenet.com.ve";
    $headers    = "From:".$from; 
    $message    = $contenido3;                             

    mail($to,$subject,$message,$headers);   
	
	echo true;
?>