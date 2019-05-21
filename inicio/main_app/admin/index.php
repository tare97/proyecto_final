<?php
    session_start();
    //error_reporting(0);
    $varsesion = $_SESSION['login_user'];
    
    if($varsesion == NULL || $versesion = ''){
        echo 'Usted no tiene autorización';
        die();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sección de Administración del sitio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Include Bootstrap CSS -->
       <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
       <link href="css/glyphicons.css" rel="stylesheet" type="text/css"/>
       <script src="js/jQuery/jquery.min.js" type="text/javascript"></script> 
       <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Include Angular v1.7.7 -->
        <script src="lib/angular/angular.min.js"></script>
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
       
        <div>
            <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
              <div class="container-fluid">
                <div class="navbar-header">
                      <a class="navbar-brand" href="#">Panel de Administración</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-user navbar-right">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['login_user']; ?></a></li>
                      <li><a href="logout.php" class="salir"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <nav class="navbar-primary">
              <ul class="navbar-primary-menu">
                <li>
                  <a href="#"><span class="glyphicon glyphicon-user"></span><span class="nav-label">Usuarios</span></a>
                  <a href="#"><span class="glyphicon glyphicon-file"></span><span class="nav-label">Publicaciones</span></a>
                </li>
              </ul>
              <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-chevron-left"></span></a>
            </nav>
            <div class="main-content">
                <h1> Este es el contenido principal </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint assumenda quae aliquid voluptatibus quia, ea, ad natus magni repellat earum, culpa iure tempore. Enim dolor eaque minima voluptas ducimus?</p>
            </div>
        </div>
        <script>
            $('.btn-expand-collapse').click(function(e) {
	        $('.navbar-primary').toggleClass('collapsed');
            });
        </script>
        
    </body>
</html>
