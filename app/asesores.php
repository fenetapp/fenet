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

    .ss1{width: 100%; height: 200px; background-color: #00A1B5; font-size: 30px; color: white; padding-top: 60px; text-align: center; line-height:40px; cursor: pointer;}
    .ss1:hover{background: #545454;}

    .ss2{width: 100%; height: 120px; margin-top: 20px; background-color: #545454; font-size: 20px; color: white; padding-top: 25px; text-align: center; line-height:30px; cursor: pointer;}
    .ss2:hover{background-color:#7F7F7F;}

    .asesor{width: 100%; height: 60px; margin-top: 140px; background-color: green; border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; font-size: 20px; color: white; padding-top: 15px; text-align: center; cursor: pointer;}
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
?>
</header>



<section>
<div style="padding-top: 50px;"></div>


<a href="serviciosEnCurso.php"><div class="ss2">SERVICIOS EN<br>CURSO</div></a>
<br>

<h5 style="text-align: center;">ASESORAMIENTOS</h5>

<?php
$ssql = "SELECT * FROM asesoramientos WHERE estatus='enCurso' ";
          $rs = mysql_query($ssql,$conexion);     
          if (mysql_num_rows($rs)>0)
          {
            $consulta = "SELECT * FROM asesoramientos WHERE  estatus='enCurso';";
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


                      //echo "<td align='center' class='dark'>".$reg[0]."</td>";
                      echo "<td align='center' class='dark' bgcolor='#ccc'><img src='img/home.png' width='40px' height='40px'></td>";
                      
                     
                      echo "<td class='dark' align='center' style='border: inset 0pt' bgcolor='#ccc'> 
                      <div>Id:".$reg[0]."</div>
                      <div>Cliente ".$reg[1]."</div>
                      <div>Tipo: ".$reg[5]."</div>


                        <form action='asesoramientos.php' method='post'>
                          <input type='hidden' name='proveedor'  value=".$reg[1]."> 
                          <input type='submit' style='width:250px; height:30px; cursor:pointer; background-color:red; border-radius:8px;' value='Chatea con el Proveedor' name='".$reg[0]."' />                         
                        </form>       
                      </td>";//FIN DEL echo
                      
/*
                      echo "<td class='dark' align='center' style='border: inset 0pt'>        
                        <form action='login.php' method='post'>      
                          <input type='hidden' name='id'          value=".$reg[0].">
                          <input type='hidden' name='servicio'    value='$servicio'>
                          <input type='hidden' name='descripcion' value='$descripcion'>
                          <input type='hidden' name='direccionServ'   value='$direccionServ'>
                          <input type='hidden' name='fecha'       value='$fecha'>
                          <input type='hidden' name='hora'        value='$hora'>
                          <input type='hidden' name='pais'        value='$pais'>
                          <input type='hidden' name='estado'        value='$estado'>
                          <input type='hidden' name='ciudad'        value='$ciudad'>
                          <input type='hidden' name='tipodeServicio'        value='$tipodeServicio'>
                          <input type='submit' style='width:250px; height:50px; cursor:pointer;' name='imageField' value='".$reg[1]."' />
                         
                        </form>       
                      </td>";//FIN DEL echo
*/
                      //echo "<td align='center' class='dark'>".$reg[13]."</td>";
                      


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

<br>
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