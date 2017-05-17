<?
   include 'head.php';
   $con = mysqli_connect("localhost", "final", "final", "finalDB");
   $query = mysqli_query($con, "SELECT * from producto where idcategoria=1 and tipo='ARRI'");
   $mujer = mysqli_fetch_array($query);
   $query = mysqli_query($con, "SELECT * from producto where idcategoria=2 and tipo='ARRI'");
   $hombre = mysqli_fetch_array($query);
   $query = mysqli_query($con, "SELECT * from producto where idcategoria=3");
   $nino = mysqli_fetch_array($query);

   ?>
<div class="jumbotron" style="margin-top:20px">
   <div class="container text-center" style="height:110px;">
      <h1>TOURSHOP</h1>
      <p>Tienda on line de productos y accesorios de importación</p>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-sm-4">
         <a href="mujer.php">
            <div class="panel panel-primary">
               <div class="panel-heading">MUJER</div>
               <div class="panel-body"><img src="../img/<? echo($mujer["foto"]) ?>" class="img-responsive" style="width:100%" alt="Image"></div>
               <div class="panel-footer"><? echo($mujer["nombre"]) ?></div>
            </div>
         </a>
      </div>
      <div class="col-sm-4">
         <a href="hombre.php">
            <div class="panel panel-danger">
               <div class="panel-heading">HOMBRE</div>
               <div class="panel-body"><img src="../img/<? echo($hombre["foto"]) ?>" class="img-responsive" style="width:100%" alt="Image"></div>
               <div class="panel-footer"><? echo($hombre["nombre"]) ?></div>
            </div>
         </a>
      </div>
      <div class="col-sm-4">
         <a href="ninos.php">
            <div class="panel panel-success">
               <div class="panel-heading">NIÑOS</div>
               <div class="panel-body"><img src="../img/<? echo($nino["foto"]) ?>" class="img-responsive" style="width:100%" alt="Image"></div>
               <div class="panel-footer"><? echo($nino["nombre"]) ?></div>
            </div>
         </a>
      </div>
   </div>
</div>
<? include 'bottom.php' ?>
</body>
</html>
