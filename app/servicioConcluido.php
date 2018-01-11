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
    <div style="width: 250px; height: 45px; background-color: #009245; margin: 0px auto; margin-bottom: 43px; color: white; font-size: 18px; text-align: center;padding-top: 10px;"><b>Servicio Concluido</b></div>


    <div class="container" style="text-align: center;">
     <p>El Servicio a sido completado con éxito.</p>
    </div>

    <div class="container" style="text-align: center;">
     <p>Gracias por usar FENET.</p>
    </div>

    <div class="container" style="text-align: center;">
     <p>En caso de algún inconveniente puede contactar a nuestros Asesores, estáran atentos para atenderle en todo momento.</p>
    </div>

<br>
<br>





     <?php

         $proveedor = $_POST['proveedor2'];
         $servicio = $_POST['servicio2'];

        $consulta = "UPDATE servicio SET 
              estatus='completada'
                    WHERE proveedor='$proveedor' and idServicio='$servicio' ";     
          $hacerconsulta = mysql_query ($consulta);


/*
$calificacion="1";

        $consulta = "UPDATE proveedor SET 
              calificacion='$calificacion'
                    WHERE proveedor='$proveedor' ";     
          $hacerconsulta = mysql_query ($consulta);
*/




                        $to       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject  =   "Servicio Concluido";          
                        //$from     =   $_POST['from'];
                        $from     =   $email;
                        $headers  =   "From:" . $from;
                        //$message  =   $_POST['mensaje'];
                        $message  =  "Se ha concluido el servicio:"

                        .$servicio. " " .

                        "//Para el Proveedor:"." ".

                        $proveedor;

                       

                        $direccion.".".$ciudad.".".$estado.".".$pais
                        ;                       
                                
                        mail($to,$subject,$message,$headers); 







        

  $ssql = "SELECT * FROM proveedor WHERE  email='$email' ";
          $rs = mysql_query($ssql,$conexion);     
          if (mysql_num_rows($rs)>0)
          {
            ?>
               <a href="inicioProveedor.php"><!-- container box --><div class="btn_aceptar"><!-- content --><p>ACEPTAR</p></div></a>
            <?php
          }
          else if (mysql_num_rows($rs)==0)
          {
            ?>
               <a href="inicio.php"><!-- container box --><div class="btn_aceptar"><!-- content --><p>ACEPTAR</p></div></a>
            <?php
          }
          else
          {
            ?>
               <a href="inicio.html"><!-- container box --><div class="btn_aceptar"><!-- content --><p>ACEPTAR</p></div></a>
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