<!DOCTYPE html>
<html lang="en">
<?php 
$url="http://".$_SERVER['HTTP_HOST']."/Coreveux/" 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinitty Showdown</title>
    <link rel="stylesheet" href="<?php echo $url?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url?>css/style.css">
    <link rel="icon" href="<?php echo $url?>img/cvx.png">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a name="" id="" class="" href="<?php echo $url;?>" role="button">
                    <img width="75px"  class="mover-derecha" src="img/cvx.png" alt="">
                </a>
            </li>
        
            <li class="navbar-brand">
                <a class="nav-link mover-abajo mover-derecha" href="<?php echo $url;?>about.php">Sobre Nosotros</a>
            </li>
            <li class="navbar-brand">
                <a class="nav-link mover-abajo" href="<?php echo $url;?>is.php">Infinitty Showdown</a>
            </li>
        </ul>
        
    </nav>
    <div class="container mover-sabajo">
        <div class="row mover-sabajo">