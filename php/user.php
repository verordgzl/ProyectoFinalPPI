<? include 'head.php';
   include '../js/funcUsuarios.php';
   include '../js/funCarrito.php';
   $data = user_data($_SESSION['correo']);
   ?>
<form method="post">
   <div class="well" style="padding-top: 10px; width: 100%; height: 800px;">
      <div align=center style="text-decoration: underline; color: #80b8ac; margin-top: 50px; font-size: 3em;"><strong>Bienvenido <? echo ($_SESSION['nombre']) ?></strong></div>
      <div style="margin-top:10px; margin-left:20px;">
        <button type="button" name="button" id= "cinco" style="width: 350px;" class="btn btn-danger btn-lg">VER MI CARRITO DE COMPRAS  <i class="glyphicon glyphicon-shopping-cart"></i></button>
      </div>
       <div class="table-responsive" id="carrito"  style=" margin-left:20px;">
            <table class="table table-hover table-striped table-bordered" style="overflow-x: auto; margin-top:10px; max-width: 80%;">
               <tr>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
               </tr>
               <?
                  $res = verCarrito();
                  while ($carrito = mysqli_fetch_array($res)){ ?>
               <tr>
                  <td><? echo $carrito['nombre']?></td>
                  <td><? echo $carrito['descripcion']?></td>
                  <td>$<? echo $carrito['precio']?></td>
                  <td><? echo $carrito['cantidad']?></td>
               </tr>
               <? } ?>
            </table>
         </div>
         <div style="margin-top:10px; margin-left:20px;">
           <button type="button" name="button" id= "seis" style="width: 350px;" class="btn btn-info btn-lg">VER MI HISTORIAL DE COMPRAS  <i class="glyphicon glyphicon-list-alt"></i></button>
         </div>
         <div class="table-responsive" id="historialUser" style=" margin-left:20px;">
            <table class="table table-hover table-striped table-bordered" style="overflow-x: auto; margin-top:10px; max-width: 80%;">
               <tr>
                  <th>ID Historial</th>
                  <th>Producto</th>
                  <th>Total de la Compra</th>
               </tr>
               <?
                  $res = verhistorialUser();
                  while ($historial = mysqli_fetch_array($res)){ ?>
               <tr>
                  <td><? echo $historial['idhistorial']?></td>
                  <td><? echo $historial['producto']?></td>
                  <td>$<? echo $historial['total']?></td>
               </tr>
               <? } ?>
            </table>
         </div>
      </div>
   </div>
</form>
</body>
</html>
