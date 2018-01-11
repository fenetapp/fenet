  <nav class="navbar navbar-dark bg-dark" style="border-top-right-radius:25px; border-top-left-radius: 25px;">
    <a class="navbar-brand" href="../index.php">
      <img src="img/fenetalone.png" width="100" height="40" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <?php
      $email = $_SESSION['login'];

      $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
      $tipoUsuario = mysql_result($ssql,0,"tipoUsuario");
      
      if($tipoUsuario == "proveedor")
      {
        ?>
          <li class="nav-item active">
            <a class="nav-link" href="inicioProveedor.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfilProveedor.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historial.php">Historial</a>
          </li>
        <?php
      }

      else if($tipoUsuario == "asesor")
      {
        ?>
          <li class="nav-item active">
            <a class="nav-link" href="asesores.php">Home</a>
          </li>
        <?php
      }

      else if($tipoUsuario == "cliente")
      {
        ?>
          <li class="nav-item active">
            <a class="nav-link" href="inicio.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfilUsuario.php">Perfil</a>
          </li>
        <?php
      }



      ?>
      <li class="nav-item">
        <a class="nav-link" href="destruir.php">Cerrar Session</a>
      </li>
    </ul>
  </div>
</nav>