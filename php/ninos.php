<? session_start(); ?>
<? include 'head.php';
   $con = mysqli_connect("localhost", "final", "final", "finalDB");
   $query = mysqli_query($con, "SELECT * from producto where idcategoria=3");
   ?>
   <div style="margin-top: 80px;" class="container">
      <div class="row">
         <? while($row = mysqli_fetch_array($query)) { ?>
        <form  method="post" action="cart.php?producto=<? echo($row["idproducto"]) ?>">
         <div class="col-sm-4">
            <div class="panel panel-success">
               <div class="panel-heading"><? echo($row["nombre"]) ?></div>
               <div class="panel-body"><img src="../img/<? echo($row["foto"]) ?>" class="img-responsive" style="width:100%" alt="Image"></div>
               <div class="panel-footer"><? echo($row["descripcion"]) ?> <br></br> $<? echo($row["precio"]) ?><br></br> Origen:<? echo($row["origen"]) ?><br></br>
                  <input type="submit" name="btnagregarCarrito" value="Agregar a Carrito" class="btn btn-default btn-xs">
               </div>
            </div>
         </div>
         </form>
         <? } ?>
      </div>
   </div>
</body>
</html>
