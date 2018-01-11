<?php
	require("cnx.php");
	$cadenista = '';
    $ssql = "SELECT * FROM seguimientos WHERE servicio = '".$_POST['servicio']."'";
    $rs = mysql_query($ssql,$conexion);     
    if (mysql_num_rows($rs)>0){
        $consulta = "SELECT * FROM seguimientos WHERE servicio='".$_POST['servicio']."' ORDER BY id DESC;";
        $hacerconsulta=mysql_query ($consulta,$conexion);
        $reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);              
        while ($reg){
            $cadenista .= "<tr>";
			$cadenista .= "<td colspan='2' align='center' bgcolor='white' style='height:10px;'></td>";
            $cadenista .= "</tr>";
            $cadenista .= "<tr>";
            if ($reg[4]=="Cliente"){
				$cadenista .= "<td align='center' class='dark' bgcolor='#ccc'><img src='img/user.png' width='40px' height='40px'></td>";
            }else{
				$cadenista .= "<td align='center' class='dark' bgcolor='#ccc'><img src='img/home.png' width='40px' height='40px'></td>";
            }
            $cadenista .= "<td class='dark' align='center' style='border: inset 0pt' bgcolor='#ccc'>
					<div> ".$reg[3]."</div>
					<div>Fecha ".$reg[6]." / Hora ".$reg[7]." </div>
				  </td>";//FIN DEL echo
			$cadenista .= "</tr>";	  
            $reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
        }
    }else{
        $cadenista = "No hay registros por confirmar";
    }
	mysql_close($conexion);
	echo $cadenista;
?>