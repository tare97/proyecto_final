
<?php
    session_start();
    //error_reporting(0);
    $varsesion = $_SESSION['login_user'];
    
    if($varsesion == NULL || $versesion = ''){
        echo 'Usted no tiene autorización';
        die();
    }
?>


<h1>Welcome:<b style="color: #00BCD4;"><?php echo $_SESSION['login_user']; ?></b></h1>

<h3><a href="logout.php">Logout</a></h3>