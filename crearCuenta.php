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
      footer{
        width: 100%;
        height: 80px;
        background-color: black;
        text-align: center;
        padding-top: 30px;
        color: white;
      }

  </style>

    <title>Fe at Network!</title>
  </head>
  <body>
    

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#conviertete">Conviertete en Proveedor</a>
    </ul>
  </div>
  <a class="nav-link" href="crearCuenta.php" style="float: right; color: white;">Crear Cuenta</a>
</nav>








<?php


/*
              echo $idProveedor    = $_POST['id'];    
              echo $servicio       = $_POST['servicio'];
              echo $descripcion    = $_POST['descripcion'];
              echo $direccionServ  = $_POST['direccionServ'];
              echo $hora           = $_POST['hora'];
              echo $fecha          = $_POST['fecha'];
              echo $tipodeServicio = $_POST['tipodeServicio'];
              echo $ciudad2         = $_POST['ciudad'];
              echo $estado2        = $_POST['estado'];
              echo $pais2           = $_POST['pais'];
              echo $estatus         = "Solicitado";



*/



      if(isset($_POST['registrar']))
      {
        
        
            include ("cnx.php");

 
            $nombre     = $_POST['nombre'];
            $apellido   = $_POST['apellido'];
            $nick      = $_POST['email'];
            $telefono   = $_POST['telefono'];
            $direccion  = $_POST['direccion'];
            $pais       = $_POST['pais'];
            $estado     = $_POST['estado'];
            $ciudad     = $_POST['ciudad'];
            $pass       = $_POST['pass'];
             

              mysql_select_db ($baseDeDatos, $conexion);
              $consulta   = "SELECT * FROM usuario WHERE email='$nick'";
              $hconsulta  = mysql_query ($consulta, $conexion);
              if (mysql_num_rows($hconsulta)>0)
              {

                ?>
                                  <script type="text/javascript">
                                  //window.location="http://managercode.com.ve/cuentaregistradae/";
                                  alert ("El correo electronico ingresado ya esta registrado");
                                  </script>

<div style="width: 260px; height: auto; background-color: none; margin: 0 auto; padding-top: 50px;">

    <div style="width: 100%; text-align: center; margin-bottom: 50px;">REGISTRATE</div>



<form action="#" method="post">


<!--
     <input type='hidden' name='servicio'       value='<?php echo $servicio ?>'>
     <input type='hidden' name='descripcion'    value='<?php echo $descripcion ?>'>
     <input type='hidden' name='direccionServ'      value='<?php echo $direccionServ ?>'>
     <input type='hidden' name='fecha'          value='<?php echo $fecha ?>'>
     <input type='hidden' name='hora'           value='<?php echo $hora ?>'>
     <input type='hidden' name='estado2'         value='<?php echo $estado2 ?>'>
     <input type='hidden' name='ciudad2'         value='<?php echo $ciudad2 ?>'>
     <input type='hidden' name='tipodeServicio' value='<?php echo $tipodeServicio ?>'>
     <input type='hidden' name='pais2'           value='<?php echo $pais2 ?>'>
     <input type='hidden' name='id'             value='<?php echo $idProveedor ?>'>
-->



<label style="color: gray; ">Nombre</label>
<input  type="text" spellcheck="false" name="nombre" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Apellido</label>
<input  type="text"  id="apellido" name="apellido" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Correo Electronico</label>
<input  type="text" id="email" name="email" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Llave o Contraseña</label>
<input  type="text" id="pass" name="pass" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Telefono</label>
<input  type="text" id="telefono" name="telefono" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<br><br>
<label style="color: gray;">Pais</label>
 <select name="pais" style="
                      background-color: #f2f2f2;
                      width: 100px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>
                  <option>Venezuela</option>
                  </select>
<br><br>
<label style="color: gray;">Estado</label>
 <select name="estado" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>
                  <option >Amazonas</option>
                  <option >Anzoategui</option>
                  <option >Apure</option>
                  <option >Aragua</option>
                  <option >Barinas</option>
                  <option >Bolivar</option>
                  <option >Carabobo</option>
                  <option >Cojedes</option>
                  <option >Delta Amacuro</option>
                  <option >Distrito Capital</option>
                  <option >Falcon</option>
                  <option >Guarico</option>
                  <option >Lara</option>
                  <option >Merida</option>
                  <option >Miranda</option>
                  <option >Monagas</option>
                  <option >Nueva Esparta</option>
                  <option >Portuguesa</option>
                  <option >Sucre</option>
                  <option >Tachira</option>
                  <option >Trujillo</option>
                  <option >Vargas</option>
                  <option >Yaracuy</option>
                  <option >Zulia</option>
                  </select>
<br><br>

    <label style="color: gray;">Ciudad</label>
<input  type="text" id="ciudad" name="ciudad" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>


    <label style="color: gray;">Direccion</label>
<input  type="text" id="direccion" name="direccion" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

    <input type="submit" name="registrar" value="Registrar" style="
      background-color: #c4c4c4;
      width: 250px;
      height: 30px;
      border: #f2f2f2 solid 1px;
      margin-top: 30px;
      margin-bottom: 60px;
      cursor: pointer;
    ">


</form>



</div>
               <?php 
              }
              else
              {
              

                mysql_query ("INSERT INTO usuario VALUES ('','$nombre','$apellido','$nick','$pass','$telefono','$direccion','cliente','$pais','$estado','$ciudad')");
         
                   mysql_close ($conexion);  


                        $to       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject  =   "Nuevo Registro de Usuario";          
                        //$from     =   $_POST['from'];
                        $from     =   $nick;
                        $headers  =   "From:" . $from;
                        //$message  =   $_POST['mensaje'];
                        $message  =  "Se ha Registrado el usuario:"

                        .$nombre. " " .$apellido." ".

                        "//Telefono:"." ".

                        $telefono." ".

                        "//Email:"." ".

                        $nick. " ".

                        "//Direccion:". " ".

                        $direccion.".".$ciudad.".".$estado.".".$pais
                        ;                       

                        /************************************************/



              $body2 = 'Saludos Cordiales:
              
                Sr(a). '.$nombre.', es un gusto para nosotros que usted forme parte de nuestra red de usuarios. Sus datos de acceso son los siguientes:
                
                    Usuario:  '.$nick.'
                    Llave: '.$pass.'
                  
                 Usted puede cambiar su clave cuando guste desde su cuenta FENET en la seccion Perfil en el menu de opciones.       
                
                 Solicitar un servicio es muy Facil, puede hacerlo en cinco pasos ingresando en el sitio web www.fenet.com.ve o descargando la Aplicacion para su Smartphone:
                 
                  
                  Paso 1. Ingrese Con su cuenta de Usuario
                  Paso 2. Seleccione el Servicio
                  Paso 3. Describa el servicio 
                  Paso 4. Indique la direccion, fecha y hora del servicio
                  Paso 5. Elija el proveedor de servicios de su preferencia

                  
                      
                  
                  Una vez solicitado el servicio usted puede chatear directamente con el Proveedor de servicios desde la opcion Servicios Solicitados en su cuenta FENET .
                  
                  Si en algun momento usted tiene alguna duda o necesita de apoyo tecnico personalizado puede contactar nuestros Asesores en la opcion Contactar Asesor. Nuestros especialistas estan listos para atenderles 24/7.
                    
                    Agradecemos por su interes en utilizar nuestra plataforma, esperamos brindarles un excelente servicio.
                    
                      ';


              $para2= $nick;
              $asunto2  = "Bienvenido a FENET";
              $desde2   = $_POST["nick"];
              $mensaje2   = $body2;
              $cabeceras2 = "";
              $cabeceras2 = "MIME-VErsion: 1.0 \r\n";
              $cabeceras2 = "Content-Type: text/html; charset=iso-8859-1\r\n";
              $cabeceras2 = "To: " . $nick . "\r\n";
              $cabeceras2 = "From: " . "info@fenet.com.ve" . "\r\n";    





                                
                        mail($to,$subject,$message,$headers); 
                        mail ($para2, $asunto2, $mensaje2, $cabeceras2);



                    

                   ?>
                     <div style="min-height: 100px; width: 100%; text-align: center; background-color: #1ca462; color: white; padding-top:25px; "><h3>"EL REGISTRO FUE COMPLETADO CON ÉXITO"</h3></div>

                     <div style="width: auto; height: auto; background-color: none; margin: 0 auto; padding-top: 50px; text-align: center;">

                          <div style="width: 100%; text-align: center; margin-bottom: 50px;"><H4>"Bienvenido a FENET"</H4></div>
                            Se ha enviado un email a la direccion de correo registrada con los datos de acceso a su cuenta. En caso de no encontrar el email mencionado por favor revise su bandeja de correos no deseados o badeja spam. <br><br>

                             Haga click en el boton <b>Solicitar Servicio</b> para realizar su primera solicitud, estamos ansiosos por atenderle.

                             <br><br>

                             En caso de dudas, necesitar cualquier tipo de asesoramiento o apoyo tecnico, le invitamos a Contactar a Nuestros Asesores desde la opcion <b>Contactar Asesor</b>. Nuestros especialistas estaran atentos para guiarlo en el uso de la Plataforma en todo momento.


                            <a href="app/index.php"><div id="solicitarServicios">Solicitar Servicio</div></a>
                      </div>

                    <?php 
              }                          
      }
      else
      {
        ?>
<div style="width: 260px; height: auto; background-color: none; margin: 0 auto; padding-top: 50px;">

    <div style="width: 100%; text-align: center; margin-bottom: 50px;">REGISTRATE</div>



<form action="#" method="post">


<!--
     <input type='hidden' name='servicio'       value='<?php echo $servicio ?>'>
     <input type='hidden' name='descripcion'    value='<?php echo $descripcion ?>'>
     <input type='hidden' name='direccionServ'      value='<?php echo $direccionServ ?>'>
     <input type='hidden' name='fecha'          value='<?php echo $fecha ?>'>
     <input type='hidden' name='hora'           value='<?php echo $hora ?>'>
     <input type='hidden' name='estado2'         value='<?php echo $estado2 ?>'>
     <input type='hidden' name='ciudad2'         value='<?php echo $ciudad2 ?>'>
     <input type='hidden' name='tipodeServicio' value='<?php echo $tipodeServicio ?>'>
     <input type='hidden' name='pais2'           value='<?php echo $pais2 ?>'>
     <input type='hidden' name='id'             value='<?php echo $idProveedor ?>'>
-->



<label style="color: gray; ">Nombre</label>
<input  type="text" spellcheck="false" name="nombre" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Apellido</label>
<input  type="text"  id="apellido" name="apellido" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Correo Electronico</label>
<input  type="text" id="email" name="email" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Llave o Contraseña</label>
<input  type="text" id="pass" name="pass" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Telefono</label>
<input  type="text" id="telefono" name="telefono" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<br><br>
<label style="color: gray;">Pais</label>
 <select name="pais" style="
                      background-color: #f2f2f2;
                      width: 100px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>
                  <option>Venezuela</option>
                  </select>
<br><br>
<label style="color: gray;">Estado</label>
 <select name="estado" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>
                  <option >Amazonas</option>
                  <option >Anzoategui</option>
                  <option >Apure</option>
                  <option >Aragua</option>
                  <option >Barinas</option>
                  <option >Bolivar</option>
                  <option >Carabobo</option>
                  <option >Cojedes</option>
                  <option >Delta Amacuro</option>
                  <option >Distrito Capital</option>
                  <option >Falcon</option>
                  <option >Guarico</option>
                  <option >Lara</option>
                  <option >Merida</option>
                  <option >Miranda</option>
                  <option >Monagas</option>
                  <option >Nueva Esparta</option>
                  <option >Portuguesa</option>
                  <option >Sucre</option>
                  <option >Tachira</option>
                  <option >Trujillo</option>
                  <option >Vargas</option>
                  <option >Yaracuy</option>
                  <option >Zulia</option>
                  </select>
<br><br>

    <label style="color: gray;">Ciudad</label>
<input  type="text" id="ciudad" name="ciudad" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>


    <label style="color: gray;">Direccion</label>
<input  type="text" id="direccion" name="direccion" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

    <input type="submit" name="registrar" value="Registrar" style="
      background-color: #c4c4c4;
      width: 250px;
      height: 30px;
      border: #f2f2f2 solid 1px;
      margin-top: 30px;
      margin-bottom: 60px;
      cursor: pointer;
    ">


</form>



</div>

        <?php
      }

?>



















<div class="container-fluid" style="background-color: #222222;">
  <div id="contenedorFinal">

        <div id="contenedorFormulario">

          <form method="post" action="#">
            <label style="font-size: 20px; color: #02feff;">Envianos un Mensaje</label>
            <br><br>
            <input type="text" value="" name="asunto" placeholder="Titulo del mensaje" style="width: 240px; height: 40px; font-size: 20px;">
            <input type="email" value="" name="from" placeholder="Correo electronico" style="width: 240px; height: 40px; font-size: 20px; margin-top: 20px;">
            <br><br>
            <textarea name="mensaje" rows="10" cols="40" placeholder="Descripcion del mensaje" ></textarea>
            <input style=" width: 120px; height: 30px; background-color: #999; margin-top: 10px" type="submit" name="enviar" value="Enviar">
          </form>
        </div>


        <div id="ContenedorMenufoother">
          <a class="afinal" href="aboutUs.php">About Us
          <br><br>
          <a class="afinal" target="_blank" href="cliente.pdf">Clientes</a>
          <br><br>
          <a class="afinal" target="_blank" href="proveedor.pdf">Proveedores</a>
          <br><br>
          <a class="afinal" target="_blank" href="terminosyCondiciones.pdf">Terminos y Condiciones</a>
          <br><br>
          <a class="afinal" target="_blank" href="prototipo/index.html">Prototipo</a>
        </div>
  </div>
</div>


<footer>Systems Admins C.A Todos los Derechos Registrados</footer>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>