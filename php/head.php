<? session_start(); ?>
<!DOCTYPE html>
<html lan="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Proyecto Final</title>
      <link rel="stylesheet" type="text/css" href="../css/final.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="../js/admin.js"></script>
      <script src="../js/user.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <ul>
                  <li class="active" style="margin-left:-45px;"><a class="navbar-brand" href="index2.php">TOURSHOP</a></li>
               </ul>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav">
                  <li class="dropdown">
                     <a  href="mujer.php" class="dropdown-toggle" data-toggle="dropdown">MUJER<span class="caret"></span></a>
                     <ul class="dropdown-menu" id="sub">
                        <li><a href="mujer.php#mujer_arriba">Partes de arriba</a></li>
                        <li><a href="mujer.php#mujer_abajo">Partes de abajo</a></li>
                        <li><a href="mujer.php#mujer_zapa">Zapatos</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="hombre.php">HOMBRE<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="hombre.php#hombre_arriba">Partes de arriba</a></li>
                        <li><a href="hombre.php#hombre_abajo">Partes de abajo</a></li>
                        <li><a href="hombre.php#hombre_zapa">Zapatos</a></li>
                     </ul>
                  </li>
                  <li><a href="ninos.php">NIÑOS</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Mi Cuenta</a></li>
                  <? if(isset($_SESSION['correo'])){ ?>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Mi Carrito</a></li>
                  <li><a href="../js/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                  <? } ?>
               </ul>
            </div>
         </div>
      </nav>
