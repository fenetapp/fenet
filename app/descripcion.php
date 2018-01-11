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
      height:auto; background-color: white; 
      margin: 0 auto; 
      border-bottom-left-radius:30px;
      border-bottom-right-radius:30px; 
      border-right:3px solid black;
      border-left:3px solid black;
      border-bottom: 3px solid black;}

    .ss1{width: 100%; height: 200px; margin-top: 50px; background-color: #00A1B5; font-size: 30px; color: white; padding-top: 60px; text-align: center; line-height:40px; cursor: pointer;}
    .ss1:hover{background: #545454;}

    .ss2{width: 100%; height: 120px; margin-top: 20px; background-color: #7F7F7F; font-size: 20px; color: white; padding-top: 25px; text-align: center; line-height:30px; cursor: pointer;}
    .ss2:hover{background-color:#545454;}

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

<div style="text-align: center; padding-top: 25px;">

<?php

    echo $servicio = $_POST['servicio'];
?>

      <form method="post" action="direccion.php"  id="crearNuevoT" style="text-align: center;">
     
     <input type="hidden" name="servicio" value="<?php echo $servicio    = $_POST['servicio'];  ?>">

        <br>
        <br>

        <?php

          if ($servicio == "COMPUTACION") {
          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>
                  <option>Soporte</option>
                  <option>Redes</option>
                  <option>Diseño Web</option>
                  <option>Camaras CCTV</option>
                  </select>

          <?php
          } else if( $servicio == "MECANICA") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>
                  <option>Ligera</option>
                  <option>Pesada</option>
                  <option>Motos</option>
                  </select>

          <?php


        } else if( $servicio == "MOTO TAXI") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>
                  <option>Transporte</option>
                  <option>Delivery</option>
                  </select>

          <?php

        } else if( $servicio == "TRANSPORTE") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>  
                  <option>Autobuses</option>
                  <option>Viajes</option>
                  <option>Mudansas</option>
                  </select>

          <?php


           } else if( $servicio == "HERRERIA") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>  
                  <option>General</option>
                  </select>

          <?php


                 } else if( $servicio == "ALBANILERIA") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>  
                  <option>General</option>
                  </select>

          <?php

                 } else if( $servicio == "ELECTRICISTA") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>  
                  <option>General</option>
                  </select>

          <?php

                 } else if( $servicio == "MAMPOSTERIA") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>  
                  <option>General</option>
                  </select>

          <?php

                 } else if( $servicio == "PLOMERIA") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>  
                  <option>General</option>
                  </select>

          <?php

                 } else if( $servicio == "ELECTRONICA") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>  
                  <option>General</option>
                  </select>

          <?php

                 } else if( $servicio == "LOGISTICA") {

          ?>
                  Tipo de Servicio:

                  <select name="tipodeServicio" style="
                      background-color: #f2f2f2;
                      width: 90px;
                      height: 20px;
                      border: #c4c4c4 solid 1px;
                      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                      "/>  
                  <option>General</option>
                  
                  </select>

          <?php
          } else {
          ?>
          <!--
                                  <script type="text/javascript">
                                  window.location="http://localhost/webFENET/fenet1.4/inicio.html";
                                  </script>

                                -->

             <?php                   
          }

        ?>





<br><br><br>
        <label id="validarDescripcion">Describe el Servicio:</label><br>
        <textarea rows="4" cols="25" name="descripcion" placeholder="De que se trata el servicio" style="
        background-color: #f2f2f2;
        width: 240px;
        border: #c4c4c4 solid 1px;       
        font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
      
        "></textarea>

<br>

  <a href="javascript: validarCampos()" name="enviar" style="

              background-color: #00A1B5;
              width: 100px;
              height: 30px;
              border: #f2f2f2 solid 1px;
              margin-top:50px ;
              cursor: pointer;
              display: inline-block;
              color:white;
              font-size: 17px;
              padding-top: 3px;


              ">Continuar</a></form>

</form>
    </div>

</div>



<a href="asesor.php"><div class="asesor">Contactar Asesor</div></a>

</secion>
    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


<script>
    function validarCampos(){

        var text=document.forms['crearNuevoT'].descripcion.value.length;


        if(text==0) {
            document.forms['crearNuevoT'].descripcion.focus();   
            document.getElementById("validarDescripcion").innerHTML = "Descripcion:(campo obligatorio)*";
            document.getElementById("validarDescripcion").style.color = "red";
            return false;
        }
        else
        {
            document.forms['crearNuevoT'].submit();
        }

    }
</script>



    
  </body>
</html>
<?php
}else{
 header("location:index.php");
}
?>