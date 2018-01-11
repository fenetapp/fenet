<?php

  session_start();
  if ($_SESSION['login'])
    {
      include ("cnx.php");          
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">

    <style>
    header{
      width: 382px; height:auto; 
      background-color: white; 
      margin: 0 auto; 
      border-top-right-radius:30px;
      border-top-left-radius:30px;  
      border-top:3px solid black; 
      border-right:3px solid black; 
      border-left:3px solid black;}

    section{
      width: 382px; 
      height:auto; background-color: 
      white; margin: 0 auto; 
      border-bottom-left-radius:30px;
      border-bottom-right-radius:30px; 
      border-right:3px solid black;
      border-left:3px solid black;
      border-bottom: 3px solid black;}

    .asesor{width: 100%; height: 60px; margin-top: 115px; background-color: green; border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; font-size: 20px; color: white; padding-top: 15px; text-align: center; cursor: pointer;}
    .asesor:hover{background-color:#006837; }

    @media (max-width:800px){

    header{width: 100%;}

    section{width: 100%;}

    } 

    </style>

    <title>Fe at Network!</title>
  </head>
  <body style=" background-image: url('../img/rgs.jpg'); background-size: 100%;">



<header>
<?php
    include ("menu.php");

    $email = $_SESSION['login'];


    $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
    $pass = mysql_result($ssql,0,"pass");


    $proveedor    = $_POST['proveedor'];
    $ssql = mysql_query("SELECT * FROM asesoramientos WHERE cliente='$proveedor'");           
    $idUsuario  =  mysql_result($ssql,0,"id");
?>
</header>





<section>

<div style="padding-top: 50px;"></div>
<p style="width: 100%; text-align: center; margin-bottom: 80px;"><b>Asesoramientos</b></p>



<form action="#" method="post">
  <input type='hidden' name='servicio'  value="<?php echo $servicio ?>">
  <input type='hidden' name='proveedor'  value="<?php echo $proveedor ?>">
  <input type='submit' value='Actualizar Chat' name="actualizar" style="background-color:#63be33; color: white; height: 30px; width: 120px; border-radius: 5px;" />  
</form>

<br>



<form action="#" method="post">                          
                                      
  <?php
  date_default_timezone_set('America/La_Paz');
  $hora       = date("G:H:s");
  $fecha      = date("j-n-y");

 /*Aqui se obtiene ultimo id o numero de seguimiento para este ticket para sumarle uno y guardar en la tabla de seguimiento para referencia del nuevo seguimiento*/         
  ?>
                                                                 
                            
              <input type="hidden" name="servicio" value="<?php echo $servicio; ?>"/>
              <input type="hidden" name="cliente2" value="<?php echo $cliente; ?>"/>
              <input type="hidden" name="seguimiento2" value="<?php echo $seguimiento; ?>"/>
              <input type="hidden" name="proveedor" value="<?php echo $proveedor; ?>"/>
              <input type="hidden" name="fecha2" value="<?php echo $fecha; ?>"/>
              <input type="hidden" name="hora2" value="<?php echo $hora; ?>"/>
              <input type="hidden" name="ticket" value="<?php echo $ticket; ?>"/>
              <textarea name="contenido" id="textarea1" placeholder="Escribir Comentario" style="width: 230px; height: 50px; background-color: #f2f2f2;"></textarea>
                                
                                  
              <input class="btm_abrirTicket" type="submit" name="seguir" value="Enviar" 
              style=" background-color:#63be33; color: white; width: 50px; height: 50px; top: 10px; vertical-align: top; cursor: pointer;" />

             
</form>




<!---------------------------------BLOQUE DE GUARDADO DE SEGUIMIENTO, MENSAJE Y CORREO-------------------------------------------------------------->
<?php
 if(isset($_POST['seguir']))
 {



  
  $contenido = $_POST['contenido'];
  $fecha3     = $_POST['fecha2'];
  $hora3      = $_POST['hora2'];
  $proveedor  = $_POST['proveedor'];  
  
  require("cnx.php");
  mysql_query ("INSERT INTO asesorchat VALUES 
  ('', '$proveedor','$contenido','$fecha3','$hora3','La Guaira','Vargas','Venezuela','Asesor')");
       

  ?>

        <h2 style="color: green;">El nuevo seguimiento ha sido reportado con exito...</h2>

  <?php
  
}
?>

<!---------------------------------FINBLOQUE DE GUARDADO DE SEGUIMIENTO, MENSAJE Y CORREO-------------------------------------------------------------->





<!-------------------------------------------------LISTA DE CHAT O SEGUIMIENTOS---------------------------------------------->
<?php
$ssql = "SELECT * FROM asesorchat WHERE  cliente='$proveedor' ";
          $rs = mysql_query($ssql,$conexion);     
          if (mysql_num_rows($rs)>0)
          {
            $consulta = "SELECT * FROM asesorchat WHERE  cliente='$proveedor' order by id desc;";
            $hacerconsulta=mysql_query ($consulta,$conexion);


              $reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);              
              while ($reg)
              {

                      echo "<table border='0' bordercolor='blue' align='center' width='100%'>";
                      echo "<tr>";
                      echo "<td align='center' bgcolor='white' style='height:10px;'><font color='black'></font></td>";
                      echo "<td align='center' bgcolor='white'style='height:10px;'><font color='black'></td>";
                     // echo "<td align='center' bgcolor='#58ACFA'><b><font color='black'></b></td>";
                      echo "</tr>";
                      

                      echo "<tr>";


                      if($reg[8]=="cliente")
                      {
                        echo "<td align='center' class='dark' bgcolor='#ccc'><img src='img/user.png' width='40px' height='40px'></td>";
                      }
                      else 
                      {
                        echo "<td align='center' class='dark' bgcolor='#ccc'><img src='img/home.png' width='40px' height='40px'></td>";
                      }
                      
                       //echo "<td align='center' class='dark' bgcolor='#ccc'>".$reg[4]."</td>"; 
                      //<img src='images/home.png' width='40px' height='40px'>
                      
                     
                      echo "<td class='dark' align='center' style='border: inset 0pt' bgcolor='#ccc'>                     
                      <div> ".$reg[2]."</div>
                      <div>Fecha ".$reg[3]." / Hora ".$reg[4]." </div>
  
                      </td>";//FIN DEL echo
                      
          


              $reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
              echo "</tr>";
              }
              echo "</table>";
              mysql_close($conexion);

          }else
          {
            echo "No hay registros por confirmar";
                      }
?>








<br><br>

</section>
    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{
  header("location:index.php");
}
?>