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
    .asesor{width: 100%; height: 60px; margin-top: 50px; background-color: green; border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; font-size: 20px; color: white; padding-top: 15px; text-align: center; cursor: pointer;}
    .asesor:hover{background-color:#006837; }

    .btn_aceptar{
        height: 30px;
        width: 250px;
        background-color: #00A1B5;
        margin: 0 auto;
        text-align: center;
        color: white;

    }

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
?>
 </header>

 <section>   


<div style="padding-top: 50px;"></div>
<p style="width: 100%; text-align: center; margin-bottom: 80px;"><b>Servicio en Curso</b></p>

<?php



$ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");           
$idUsuario  =  mysql_result($ssql,0,"id");


 $servicio    = $_POST['servicio'];
 $proveedor    = $_POST['proveedor'];


 ?>












<form action="#" method="post">
  <input type='hidden' name='servicio'  value="<?php echo $servicio ?>">
  <input type='hidden' name='proveedor'  value="<?php echo $proveedor ?>">
  <input type='submit' value='Actualizar Chat' name="actualizar" style="background-color:#63be33; color: white; height: 30px; width: 120px; border-radius: 5px; margin: 0 auto;" />  
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



  $ticket3    = $_POST['servicio'];
  $contenido3   = $_POST['contenido'];
  $seguimiento3 = "Cliente";
  $fecha3     = $_POST['fecha2'];
  $hora3      = $_POST['hora2'];
  $proveedor  = $_POST['proveedor'];  
  
  require("cnx.php");
  mysql_query ("INSERT INTO seguimientos VALUES 
  ('', '$ticket3','$idUsuario','$contenido3','$seguimiento3','$proveedor','$fecha3','$hora3')");
       
  $consulta = "UPDATE tickets SET 
  seguimientos ='$seguimiento3' WHERE ticket=$ticket3";     
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
  ?>

        <h2 style="color: green;">El nuevo seguimiento ha sido reportado con exito...</h2>

  <?php
  
}
?>

<!---------------------------------FINBLOQUE DE GUARDADO DE SEGUIMIENTO, MENSAJE Y CORREO-------------------------------------------------------------->





<!-------------------------------------------------LISTA DE CHAT O SEGUIMIENTOS---------------------------------------------->
<?php


$ssql = "SELECT * FROM seguimientos WHERE  servicio='$servicio' ";
          $rs = mysql_query($ssql,$conexion);     
          if (mysql_num_rows($rs)>0)
          {
            $consulta = "SELECT * FROM seguimientos WHERE  servicio='$servicio' order by id desc;";
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


                      if ($reg[4]=="Cliente")
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
                      <div> ".$reg[3]."</div>
                      <div>Fecha ".$reg[6]." / Hora ".$reg[7]." </div>
  
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


</div>
<!-------------------------------------------------LISTA DE CHAT O SEGUIMIENTOS---------------------------------------------->







<a href="asesor.php"><div class="asesor">Contactar Asesor</div></a>

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