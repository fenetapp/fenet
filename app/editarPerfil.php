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

    $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
    $pass = mysql_result($ssql,0,"pass");
?>
</header>

<section>

<div style="padding-top: 50px;"></div>
<p style="width: 100%; text-align: center; margin-bottom: 80px;"><b>Cambiar Contraseña</b></p>


<form action="#" method="post" style="background-color: none; height: auto; width: 250px; margin: 0 auto;">

<label style="color: gray; ">Contraseña Anterior</label>
<input  type="text" spellcheck="false" name="oldPass" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>


<label style="color: gray;">Nueva Contraseña</label>
<input  type="text" id="email" name="newPass" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<label style="color: gray;">Confirmar Contraseña</label>
<input  type="text" id="email" name="confirmPass" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>


        <input type="submit" name="change_pass" value="Cambiar Contraseña" style="
      background-color: #c4c4c4;
      width: 250px;
      height: 30px;
      border: #f2f2f2 solid 1px;
      margin-top: 30px;
      cursor: pointer;
    ">


</form>

<?php
if(isset($_POST['change_pass']))
{

  $oldPass= $_POST['oldPass'];
  $newPass= $_POST['newPass'];
  $confirmPass= $_POST['confirmPass'];


  if($pass == $oldPass && $newPass == $confirmPass)
  {
    $consulta = "UPDATE usuario SET 
                    pass='$newPass'
                        WHERE email='$email'";     
                    $hacerconsulta = mysql_query ($consulta);

    echo "<br><h5 style='text-align:center; color:green;'>La contraseña fue actualizada</h5>";
  }
  else
  {
    echo "<br><h5 style='text-align:center; color:red;'>Las contraseñas no coinciden</h5>";
  }
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