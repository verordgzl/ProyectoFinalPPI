<? include 'head.php';
$con = mysqli_connect("localhost", "final", "final", "finalDB");
?>
<div style="margin-top: 80px"; class="container">
  <div class="row" id="mujer_arriba">
    <div style="font-size: 2em; color:rgb(8, 151, 212); text-align:center; margin-bottom:15px;" id="mujer_arriba">PARTES DE ARRIBA</div>
    <?
    $query = mysqli_query($con, "SELECT * from producto where idcategoria=1 and tipo='ARRI'");
    while($row = mysqli_fetch_array($query)) { ?>
    <div class="col-sm-4">
       <div class="panel panel-primary">
          <div class="panel-heading"><? echo($row["nombre"]) ?></div>
          <div class="panel-body"><img src="../img/<? echo($row["foto"]) ?>" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer"><? echo($row["descripcion"]) ?> <br></br> $<? echo($row["precio"]) ?><br></br> Origen:<? echo($row["origen"]) ?><br></br>
          <input type="submit" name="btnagregarCarrito" value="Agregar a Carrito" class="btn btn-default btn-xs"></div>
       </div>
    </div>
    <? } ?>
  </div>

  <div class="row" id="mujer_abajo">
    <div style="font-size: 2em; color:rgb(72, 187, 101); text-align:center; margin-bottom:15px;">PARTES DE ABAJO</div>
    <?
    $query = mysqli_query($con, "SELECT * from producto where idcategoria=1 and tipo='ABAJ'");
    while($row = mysqli_fetch_array($query)) { ?>
    <div class="col-sm-4">
       <div class="panel panel-success">
          <div class="panel-heading"><? echo($row["nombre"]) ?></div>
          <div class="panel-body"><img src="../img/<? echo($row["foto"]) ?>" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer"><? echo($row["descripcion"]) ?> <br></br> $<? echo($row["precio"]) ?><br></br> Origen:<? echo($row["origen"]) ?><br></br>
          <input type="submit" name="btnagregarCarrito" value="Agregar a Carrito" class="btn btn-default btn-xs"></div>
       </div>
    </div>
    <? } ?>
  </div>

  <div class="row" id="mujer_zapa">
    <div style="font-size: 2em; color:rgb(231, 196, 92); text-align:center; margin-bottom:15px;">ZAPATOS</div>
    <?
    $query = mysqli_query($con, "SELECT * from producto where idcategoria=1 and tipo='ZAPA'");
    while($row = mysqli_fetch_array($query)) { ?>
    <div class="col-sm-4">
       <div class="panel panel-warning">
          <div class="panel-heading"><? echo($row["nombre"]) ?></div>
          <div class="panel-body"><img src="../img/<? echo($row["foto"]) ?>" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer"><? echo($row["descripcion"]) ?> <br></br> $<? echo($row["precio"]) ?><br></br> Origen:<? echo($row["origen"]) ?><br></br>
          <input type="submit" name="btnagregarCarrito" value="Agregar a Carrito" class="btn btn-default btn-xs"></div>
       </div>
    </div>
    <? } ?>
  </div>

</div>

  </body>
</html>
