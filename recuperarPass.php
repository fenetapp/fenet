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



<section>

<?php
    if (isset($_POST['recuperar'])){


      include ("cnx.php");
      $email = $_POST['email'];
      $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");

      if (mysql_num_rows($ssql)>0){
      $pass = mysql_result($ssql,0,"pass");

        ?>
           <div style="height: 100px; width: 100%; text-align: center; background-color: #1ca462; color: white; padding-top:25px; "><h3>"Recuperación Exitosa"</h3></div>

                     <div style="width: auto; height: auto; background-color: none; margin: 0 auto; padding-top: 50px; text-align: center;">

                        <h4>Contraseña Reenviada</h4>
                          <br><br>
                          <div style="width: 100%; text-align: center; margin-bottom: 50px;">Se ha enviado un email a la direccion de correo registrada con los datos de acceso a su cuenta. En caso de no encontrar el email mencionado por favor revise su bandeja de correos no deseados o badeja spam. </div> <br><br>                                                
                     </div>
        <?php




          $body2 = 'Saludos Cordiales:
              
                Sus datos de acceso para ingresar a su cuenta FENET son los siguientes:
                
                    Usuario:  '.$email.'
                    Password: '.$pass.'
                  
                 Usted puede cambiar su clave cuando guste desde su cuenta FENET en la seccion Perfil en el menu de opciones.       
                
          
                  Si en algun momento usted tiene alguna duda o necesita de apoyo tecnico personalizado puede contactar nuestros Asesores en la opcion Contactar Asesor. Nuestros especialistas estan listos para atenderles 24/7.
                    
                    Si usted no solicito la recuperacion de los datos por favor informenos al email info@fenet.com.ve.
                    
                      ';


              $para2= $email;
              $asunto2  = "Recuperacion de Cuenta FENET";              
              $mensaje2   = $body2;
              $cabeceras2 = "From: " . "info@fenet.com.ve" . "\r\n";

              mail ($para2, $asunto2, $mensaje2, $cabeceras2);





      }
      else{
         ?>

                  <div class="container-fluid">

                    <h2 style="text-align: center; margin-top: 100px;">Recupera tu cuenta</h2>
                    <div class="row">
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4" style="background-color: none; height: auto; text-align: none; margin-top: 50px; margin-bottom: 100px; text-align: center;">
                        
                        <form method="post" action="#">
                          <label>Coloca la direccion de correo electronico registrada.</label>
                          <input type="email" name="email" placeholder="tu@correo.com">
                          <p><font color="red">El correo ingresado no se encuentra registrado.</font></p>
                          <br><br>
                          <input type="submit" name="recuperar" value="Recuperar Contraseña" style="height: 30px; ">
                        </form>

                        <br><br>

                      <div class="col-lg-4"></div>
                    </div>
                  </div>
                  </div>

        <?php
      }
      




      
    }
    else
    {
        ?>

                  <div class="container-fluid">

                    <h2 style="text-align: center; margin-top: 100px;">Recupera tu cuenta</h2>
                    <div class="row">
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4" style="background-color: none; height: auto; text-align: none; margin-top: 50px; margin-bottom: 100px; text-align: center;">
                        
                        <form method="post" action="#">
                          <label>Coloca la direccion de correo electronico registrada.</label>
                          <input type="email" name="email" placeholder="tu@correo.com">
                          <br><br>
                          <input type="submit" name="recuperar" value="Recuperar Contraseña" style="height: 30px; ">
                        </form>

                        <br><br>

                      <div class="col-lg-4"></div>
                    </div>
                  </div>
                  </div>

        <?php
    }


?>











</section>


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