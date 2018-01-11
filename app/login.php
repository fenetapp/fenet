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


  <?php 
       $idProveedor    = $_POST['id'];
       $servicio       = $_POST['servicio'];
       $descripcion    = $_POST['descripcion'];
       $direccionServ  = $_POST['direccionServ'];
       $hora           = $_POST['hora'];
       $fecha          = $_POST['fecha'];
       $tipodeServicio = $_POST['tipodeServicio'];
       $ciudad         = $_POST['ciudad'];
       $estado         = $_POST['estado'];
       $pais           = $_POST['pais'];
       $estatus        = "solicitado";
  ?>



<header>


  <nav class="navbar navbar-dark bg-dark" style="border-top-right-radius:25px; border-top-left-radius: 25px;">
    <a class="navbar-brand" href="../index.php">
      <img src="img/fenetalone.png" width="100" height="40" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="inicio.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="perfilUsuario.php">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="destruir.php">Cerrar Session</a>
      </li>
    </ul>
  </div>
</nav>
</header>



<section>


  <div style="text-align: center; padding-top: 30px;">
    <p>Confirme su cuenta</p>
    <img src="img/user.png">




<form action="#" method="post">

<br><br>
<label style="color: gray; ">Correo Electronico</label><br>
<input  type="text" spellcheck="false" name="user" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<br>
<label style="color: gray;">Llave</label><br>
<input  type="password"  id="llave" name="llave" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<br>
    <input type="submit" name="login" value="Confirmar" style="
      background-color: #c4c4c4;
      width: 250px;
      height: 30px;
      border: #f2f2f2 solid 1px;
      margin-top: 30px;
      cursor: pointer;
    ">


               <input type='hidden' name='servicio'    value='<?php echo $servicio ?>'>
               <input type='hidden' name='descripcion' value='<?php echo $descripcion ?>'>
               <input type='hidden' name='direccionServ'   value='<?php echo $direccionServ ?>'>
               <input type='hidden' name='fecha'       value='<?php echo $fecha ?>'>
               <input type='hidden' name='hora'        value='<?php echo $hora ?>'>
               <input type='hidden' name='id'          value='<?php echo $idProveedor ?>'>
               <input type='hidden' name='estado'       value='<?php echo $estado ?>'>
               <input type='hidden' name='ciudad'        value='<?php echo $ciudad ?>'>
               <input type='hidden' name='tipodeServicio'        value='<?php echo $tipodeServicio ?>'>
               <input type='hidden' name='pais'          value='<?php echo $pais ?>'>
        
      </form>
    
<?php

     if (isset($_POST['login']))
     {
        //$nick     =   $_POST['user'];
        $email    =   $_POST['user'];
        $pass     =   $_POST['llave'];




        $consulta = "SELECT * FROM usuario WHERE  email='email' AND pass='pass' ;";
        $hacerconsulta=mysql_query ($consulta,$conexion);

        $ssql = "SELECT * FROM usuario WHERE email='$email' and pass='$pass'";
                      $rs = mysql_query($ssql,$conexion);
                          if (mysql_num_rows($rs)==1)
                          {                            
                             
                          
                                
                              $ssqlId = mysql_query("SELECT * FROM usuario WHERE email='$email'");
                              $idcliente    =  mysql_result($ssqlId,0,"id");  

                              mysql_query ("INSERT INTO servicio VALUES ('','$servicio','$tipodeServicio','$descripcion','$direccionServ','$ciudad','$estado','$pais','$fecha','$hora','$idProveedor','$idcliente','$estatus')");


                                    $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
                                      $tipoUsuario = mysql_result($ssql,0,"tipoUsuario");
                                      $nombre   = mysql_result($ssql,0,"nombre");
                                      $apellido = mysql_result($ssql,0,"apellido");
                                      $telefono = mysql_result($ssql,0,"telefono");
            
                              mysql_close ($conexion); 




                        $to       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject  =   "Solicitud de Servicio";          
                        //$from     =   $_POST['from'];
                        $from     =   $email;
                        $headers  =   "From:" . $from;
                        //$message  =   $_POST['mensaje'];
                        $message  =  "Nueva Solicitud de Servicio para el Usuario:"

                        .$nombre. " ".$apellido .

                        "//Tipo de Usuario:"." ".

                        $tipoUsuario. " ".

                        "//Email:"." ".

                        $email. " ".

                        "//Telefono:"." ".

                        $telefono. " ".

                        "//Servicio:"." ".

                        $servicio. " ".

                        "//Tipo de Servicio:"." ".

                        $tipodeServicio." ".

                        "//Descripcion:"." ".

                        $descripcion. " ".

                        "//Fecha:"." ".

                        $fecha. " ".

                        "//Hora:"." ".

                        $hora. " ".

                        "//PROVEEDOR SELECCIONADO:"." ".

                        $idProveedor. " ".

                        "//Direccion:". " ".

                        $direccionServ.".".$ciudad.".".$estado.".".$pais
                        ;                       
                                
                        mail($to,$subject,$message,$headers); 









                            ?>




                            <script type="text/javascript">
                           window.location="solicitudCompleta.php";
                            </script>
                            <?php 



                          }
                          else
                          {
                            ?>
                              <div><font color="red">Usuario o contraseña incorrecta</font></div>
                            <?php              
                            mysql_close($conexion);
                          }
     }

?>






  </div>



<div class="asesor">Contactar Asesor Fenet</div>

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