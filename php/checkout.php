<?
include 'head.php'; include '../js/funCarrito.php';
session_start();
if (isset($_POST['checkout'])) {
  $total= $_POST['total'];
}


?>

<div class="table-responsive" style=" margin-left:20px;">
   <table class="table table-hover table-striped table-bordered" style="overflow-x: auto; margin-top:50px; max-width: 80%;">
      <tr>
         <th>Producto</th>
         <th>Precio</th>\
         <th>Cantidad</th>
      </tr>
      <?
         $res = verCarrito();
         while ($carrito = mysqli_fetch_array($res)){ ?>
      <tr>
         <td><? echo $carrito['nombre']?></td>
         <td>$<? echo $carrito['precio']?></td>
         <td><? echo $carrito['cantidad']?></td>
      </tr>
      <? } ?>
      <tr>
        <td><strong>TOTAL DE LA COMPRA:</strong></td>
        <td><strong>$<? echo $total ?></strong></td>
      </tr>
   </table>
   <h3>Tu cargo se hará al número de tarjeta: <? echo($_SESSION['tarjeta'])?></h3>
   <h3>Tus productos se enviarán a la dirección: <? echo ($_SESSION['calle'])?>
     #<? echo ($_SESSION['numero'])?>, <? echo ($_SESSION['colonia'])?>, <? echo ($_SESSION['cp'])?></h3>
    <form action="final.php" method="post">
      <div align=center style="margin-top:30px; margin-left:20px;">
        <input style="display: none" type="text" name="total" value="<? echo $total ?>">
        <button type="submit" name="continue" style="width: 350px;" class="btn btn-warning btn-lg">CONTINUAR</button>
      </div>
    </form>
</div>
