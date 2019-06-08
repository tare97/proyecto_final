<!--Barra de navegacion-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand menu-bar" href="#">EnjoyArt Application</a>
      <!--Enlace del escript para su correcto funcionamiento-->
      <script src="../usuario/js/abrir.js"></script>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <!--Boton que muestra el nombre de usuario y el enlace para el panel de tu usuario-->
          <li class="x"><a href="../usuario/perfil/tuUsuario/vista/miUsuario.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['login_user']; ?></a></li>
          <!--Boton para salir fuera de la aplicación-->
          <li class="xa"><a href="../usuario/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



