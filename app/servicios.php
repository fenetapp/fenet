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

    .asesor{width: 100%; height: 60px; margin-top: 80px; background-color: green; border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; font-size: 20px; color: white; padding-top: 15px; text-align: center; cursor: pointer;}
    .asesor:hover{background-color:#006837; }

    .servicio{background-color: #00A1B5; width: 250px; height: 60px; border: #f2f2f2 solid 1px; margin-top: 20px; cursor: pointer; display: inline-block;}

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

<form action="descripcion.php" method="post" style="text-align: center;">

      <input type="submit" name="servicio" value="COMPUTACION" class="servicio">

      <input type="submit" name="servicio" value="MECANICA" class="servicio">

      <!--<input type="submit" name="servicio" value="MOTO TAXI" class="servicio">-->

      <input type="submit" name="servicio" value="TRANSPORTE" class="servicio">

      <input type="submit" name="servicio" value="HERRERIA" class="servicio">

      <input type="submit" name="servicio" value="ALBANILERIA" class="servicio">

      <input type="submit" name="servicio" value="ELECTRICISTA" class="servicio">

      <input type="submit" name="servicio" value="MAMPOSTERIA" class="servicio">

      <input type="submit" name="servicio" value="PLOMERIA" class="servicio">

      <input type="submit" name="servicio" value="ELECTRONICA" class="servicio">

     <input type="submit" name="servicio" value="LOGISTICA" class="servicio">
</form>

       <div style="background-color: none; width: 100%; margin-top: 70px; text-align: center;">
            <p>Si no conseguiste el servicio que buscabas por favor postula el tipo de servicio y lo incluiremos para ti</p>
            <br>
      </div>

      <br>

      <div style="background-color: none; width: 100%; text-align: center;" >
        <form method="post" action="#">
          <label>Nombre de Servicio:</label>
          <br>
        <input type="text" name="servicio" style="background-color: #f2f2f2; border:solid 1px #D8D8D8; height: 25px;" >
        <br><br>
        <label>Estado:</label>
        <br>
        <input type="text" name="estado" style="background-color: #f2f2f2; border:solid 1px #D8D8D8; height: 25px;" >
        <br><br>
        <label>Ciudad:</label>
        <br>
        <input type="text" name="ciudad" style="background-color: #f2f2f2; border:solid 1px #D8D8D8; height: 25px;" >
        <br><br>
         <input type="submit" name="postular" value="Postular Servicio" style=" width: 140px; height: 30px; background-color: #999;" >
      </form>
     </div>


        <?php 
        $email= $_SESSION['login'];

        $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
        $tipoUsuario = mysql_result($ssql,0,"tipoUsuario");
        $nombre   = mysql_result($ssql,0,"nombre");
        $apellido = mysql_result($ssql,0,"apellido");
        $telefono = mysql_result($ssql,0,"telefono");

          if (isset($_POST['postular']))
          {
                $to       =   "appfenet@gmail.com";
                //$subject  =   $_POST['asunto'];
                $subject  =   "Postulacion de Servicio";          
                //$from     =   $_POST['from'];
                $from     =   $email;
                $headers  =   "From:" . $from;
                //$message  =   $_POST['mensaje'];
                $message  =  "El Servicio Solicitado es: "

                . $_POST['servicio'].

                "//Estado:"

                . $_POST['estado'].

                "//Ciudad:"

                . $_POST['ciudad'].

                "//Usuario:"

                . $nombre."".$apellido.

                "//Telefono:"

                . $telefono.

                "//Email:"

                . $email


                ;                       
                        
                mail($to,$subject,$message,$headers);                  


              ?>
                  <script type="text/javascript">
                   alert ("La solicitud para agregar el servicio fue enviada. Pronto un Asesor se contactara con usted para informarle de la gestion");
                  </script>
              <?php

            }
        ?>


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