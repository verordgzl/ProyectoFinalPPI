<? include 'head.php'; include '../js/funCarrito.php';
session_start();

   if (isset($_POST['btnagregarCarrito'])) {
     $id = $_SESSION['id'];
		 $idproducto = $_GET['producto'];
		 $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $sql = ("SELECT * FROM carrito WHERE usuario='$id' AND producto='$idproducto'");
     $res = mysqli_query($con, $sql);
     $sql = ("INSERT INTO carrito (usuario, producto, cantidad) VALUES ('$id', '$idproducto', '1')");
  	 $res = mysqli_query($con, $sql);
		 if (!$res) {
        printf("Error: %s\n", mysqli_error($con));
     }
   }
?>
<div style="padding-top: 10px; width: 100%; height: 800px;">
   <div align=center style="text-decoration: underline; color: #b88080; margin-top: 50px; font-size: 3em;"><strong>CARRITO DE COMPRAS</strong></div>
   <div class="table-responsive" style= "margin-left:20px;">
        <table class="table table-hover table-striped table-bordered" style="overflow-x: auto; margin-top:10px; max-width: 80%;">
           <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Precio</th>
              <th>Cantidad</th>
           </tr>
           <?
              $i = 0;
              $precios = array();
              $res = verCarrito();
              while ($carrito = mysqli_fetch_array($res)){
                $precios[$i] = $carrito['precio'];
                $i++;
              ?>
           <tr>
              <td><? echo $carrito['nombre']?></td>
              <td><? echo $carrito['descripcion']?></td>
              <td>$<? echo $carrito['precio']?></td>
              <td><? echo $carrito['cantidad']?></td>
           </tr>
           <? }
           $j = count($precios);
           $suma = 0;
           for ($i=0; $i < $j ; $i++) {
             $suma = $suma + $precios[$i];
           }
           $total = $suma;

           ?>
        </table>
     </div>
     <form method="post" action="checkout.php">
       <div style="margin-top:10px; margin-left:20px;">
         <input style="display: none" type="text" name="total" value="<? echo $total?>">
         <button type="submit" name="checkout" style="width: 350px;" class="btn btn-warning btn-lg">PAGAR  <i class="glyphicon glyphicon-usd"></i></button>
       </div>
     </form>
</div>
</body>
</html>
