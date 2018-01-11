<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


    <style>
      body{background-color: #222222;}
      .borde { border: 1px solid black; }
      .imgmundo{background-image: url(img/mundo.jpg); 
      background-repeat: no-repeat; 
      background-position: center; 
      background-size: 100%; 
      height: 605px;}
      .video{width:640px; height:340px;}
      footer{
        width: 100%;
        height: 80px;
        background-color: black;
        text-align: center;
        padding-top: 30px;
        color: white;
      }


    @media (max-width:880px){

      .imgmundo{
        background-image: none;
        background-color: #0078d7;
        height: 500px;
      }

      .video{width:100%; height:340px;}

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
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#conviertete">Conviertete en Proveedor</a>
    </ul>
  </div>
  <a class="nav-link" href="crearCuenta.php" style="float: right; color: white;">Crear Cuenta</a>
</nav>


<header>
<div class="container-fluid imgmundo"> 

    <div style="text-align: center; padding-top: 100px;"><img src="img/logoBlack.png"></div>
    <div style="text-align: center; padding-top: 40px; color: black; font-size: 20px;"><p><b>SOLICITUD DE SERVICIOS<br>DONDE QUIERAS, CUANDO QUIERAS</b></p></div>
    <a href="app/index.php"><div id="solicitarServicios">Solicitar Servicios</div></a>
</div>
</header>


<div id="comoFunciona">
      <font size="5px" color="black"><b>¿COMO FUNCIONA FENET?</b></font>
      <div id="video">


        <div style="position:relative;height:0;padding-bottom:36.25%; height:340px;"><iframe class="video" src="https://www.youtube.com/embed/y7xTO7gJT70" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>

      </div>  
      <div class="icono"><img src="img/playStore.png"></div>
      <div class="icono"><img src="img/appleStore.png"></div>
      <div class="icono"><img src="img/windowsStore.png"></div>
      <div class="icono"><img src="img/appStore.png"></div>
</div>





<div id="conviertete" style="background-color: white; padding-top: 100px;">

      <font size="5px" color="black"><b>CONVIERTETE EN PROVEEDOR FENET</b></font>

    <div id="video">
     <div style="position:relative;height:0;padding-bottom:36.25%; height:340px;"><iframe class="video" src="https://www.youtube.com/embed/6HMxMD98ZH4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
    </div>
</div>





<div id="dondeFunciona">
      <div id="contenedorIMG2"></div>

      <div id="contenedorLetras2">
        <p id="titulo"><font size="5px" color="#24292e"><b>¿DONDE FUNCIONA FENET?</b></font></p>
      </div>
</div>










        <?php 
          if (isset($_POST['enviar']))
          {
                $to       =   "appfenet@gmail.com";
                //$subject  =   $_POST['asunto'];
                $subject  =   $_POST['asunto'];          
                //$from     =   $_POST['from'];
                $from     =   $_POST['from'];
                $headers  =   "From:" . $from;
                //$message  =   $_POST['mensaje'];
                $message  =  $_POST['mensaje'];                       
                        
                mail($to,$subject,$message,$headers);                  


              ?>
                  <script type="text/javascript">
                   alert ("Su mensaje fue enviado con exito");
                  </script>
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