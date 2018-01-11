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

    .botton{background-color: #00A1B5; color: white; width: 130px; height: 45px;  font-size: 14px;}
    .botton:hover{background-color:#545454;}

    .bottonRed{background-color: #C1272D; color: white; width: 200px; font-size: 14px; height: 25px; margin: 47px auto; text-align: center;}
    .bottonRed:hover{background-color:#545454;}
  
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
<?php
        $email = $_SESSION['login'];
        $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
        $nombre = mysql_result($ssql,0,"nombre");
        $apellido = mysql_result($ssql,0,"apellido");
        $usuario = $nombre." ".$apellido;

        $telefono = mysql_result($ssql,0,"telefono");

        $pais = mysql_result($ssql,0,"pais");
        $estado = mysql_result($ssql,0,"estado");
        $ciudad = mysql_result($ssql,0,"ciudad");
        $direccion = mysql_result($ssql,0,"direccion");
        $ubicacion = $direccion.".".$ciudad.".".$estado.".".$pais;
      ?>


  <div style="text-align: center; padding-top: 50px; margin-bottom: 30px;">
    <img src="img/user.png">
  </div>

  <div style="width:250px; height: auto; margin: 0 auto;">
    <div>
     <p><b>USUARIO: </b><br><?php echo $usuario ?></p>
    </div>
    <div>
     <p><b>EMAIL:  </b><br><?php echo $email ?></p>
    </div>
    <div>
     <p><b>TELEFONO: </b><br> <?php echo $telefono ?></p>
    </div>
    <div>
     <p><b>UBICACION:  </b><br><?php echo $ubicacion ?></p>
    </div>
  </div>

    <a href="editarPerfil.php" style="text-decoration: none;">
      <div class="bottonRed">
        <p>CAMBIAR CONTRASEÑA</p>
      </div>
    </a>

    <div style="width: 130px; margin: 0 auto; background-color: red; text-align: center;">
      <a href="upProveedor.php">
        <div style=" float: left;" class="botton">
          <p>AGREGAR NUEVO<br>SERVICIO</p>
        </div>
    </div>
    





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