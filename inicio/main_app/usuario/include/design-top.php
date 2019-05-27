<!--Barra de navegacion-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">EnjoyArt Application</a>
      <img src="../usuario/css/barra-lateral.jpg" alt="" class="menu-bar" style="width: 40px;">
      <!--Enlace del escript para su correcto funcionamiento-->
      <script src="../usuario/js/abrir.js"></script>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li class="x"><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['login_user']; ?></a></li>
          <li class="xa"><a href="../usuario/logout.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>



