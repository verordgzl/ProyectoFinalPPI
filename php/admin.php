<? include_once 'head.php'; include '../js/funcAdmin.php'; ?>
<div style="margin-top:70px; margin-left:20px;">
   <form method="post">
      <div><input type="button" id="dos" name="btnverHistorial" value="VER HISTORIAL DE COMPRAS DE USUARIOS" class="btn btn-success btn-lg"></div>
      <div class="table-responsive" id="historial">
         <table class="table table-hover table-striped table-bordered" style="overflow-x: auto; margin-top:10px; max-width: 80%;">
            <tr>
               <th>ID Historial</th>
               <th>Usuario</th>
               <th>Producto</th>
               <th>Descripcion</th>
               <th>Precio</th>
            </tr>
            <?
               $res = verHistorial();
               while ($historial = mysqli_fetch_array($res)){ ?>
            <tr>
               <td><? echo $historial['idhistorial']?></td>
               <td><? echo $historial['usuario']?></td>
               <td><? echo $historial['producto']?></td>
               <td><? echo $historial['descripcion']?></td>
               <td>$<? echo $historial['precio']?></td>
            </tr>
            <? } ?>
         </table>
      </div>
      <p></p>
      <div><input type="button" id="tres" name="btnalta" value="DAR DE ALTA PRODUCTO NUEVO" class="btn btn-info btn-lg"></div>
      <div class="table-responsive" id="alta" style="overflow-x: auto; margin-top:10px;">
   <form method="post">
   <table class="table table-hover table-striped table-bordered" style="width: 30%;">
   <tr>
   <th>Nombre</th>
   <td><input type="text" name="nombre"></td>
   </tr>
   <tr>
   <th>Categoría</th>
   <td><select name="idcategoria">
   <option value="1">1 - Mujeres</option>
   <option value="2">2- Hombres</option>
   <option value="3">3- Niños</option>
   </td>
   </tr>
   <tr>
   <th>Tipo</th>
   <td><input type="text" name="tipo"></td>
   </tr>
   <tr>
   <th>Descripción</th>
   <td><input type="text" maxlength="200" name="descripcion"></td>
   </tr>
   <tr>
   <th>Foto</th>
   <td><input type="text" maxlength="200" name="foto"></td>
   </tr>
   <tr>
   <th>Precio $</th>
   <td><input type="text" name="precio"></td>
   </tr>
   <tr>
   <th>Stock</th>
   <td><input type="number" name="stock"></td>
   </tr>
   <tr>
   <th>Fabricante</th>
   <td><select name="idfab">
   <? $res = fabricante(); while ($fab = mysqli_fetch_array($res)){ ?>
   <option value="<? echo $fab['idfabricante'] ?>"><? echo $fab['nombre'] ?></option>
   <? } ?>
   </td>
   </tr>
   <tr>
   <th>Origen</th>
   <td><input type="text" name="origen"></td>
   </tr>
   <tr>
   <td colspan="2" align="center"><input class="btn btn-info btn-sm" type="submit" name="darAlta" value="DAR DE ALTA"></td>
   </tr>
   </table>
   </form>
   </div>
   <p></p>
   <div><input type="button" id="cuatro" name="btnmodificar" value="MODIFICAR PRODUCTO" class="btn btn-warning btn-lg"></div>
   <div class="table-responsive" id="modificar" style="overflow-x: auto; margin-top:10px;">
   <form method="post">
   <table class="table table-hover table-striped table-bordered" style="width: 30%;">
   <tr>
   <th>Selecciona un producto:</th>
   </tr>
   <tr>
   <th style="text-align=center">ID || Nombre</th>
   </tr>
   <tr>
   <th><select size="8" name="idproducto">
   <?   $res = verProductos();
      while ($producto = mysqli_fetch_array($res)){ ?>
   <option value="<? echo $producto['idproducto'] ?>"><? echo $producto['idproducto'] ?> || <? echo $producto['nombre'] ?></option>
   <? } ?>
   </select></th>
   </tr>
   <tr>
   <th>Selecciona el dato que le quieres cambiar:</th>
   </tr>
   <tr>
   <td><input type="radio" name="op" value="1" CHECKED> Nombre
   <input type="radio" name="op" value="2"> Tipo
   <input type="radio" name="op" value="3"> Descripción<br>
   <input type="radio" name="op" value="4"> Foto
   <input type="radio" name="op" value="5"> Precio
   <input type="radio" name="op" value="6"> Stock
   <input type="radio" name="op" value="7"> Origen
   </td>
   </tr>
   <tr>
   <th>Escribe el dato nuevo:</th>
   </tr>
   <tr>
   <th><input type="text" name="cambio" maxlength="200" size="50"></th>
   </tr>
   <tr>
   <th><input class="btn btn-warning btn-sm" type="submit" name="cambiarProducto" value="MODIFICAR PRODUCTO"></th>
   </tr>
   </table>
   </form>
   </div>
   <p></p>
   <div><input type="submit" id="uno" name="btnverProductos" value="VER PRODUCTOS DEL INVENTARIO" class="btn btn-primary btn-lg"></div>
   <div class="table-responsive" id="prod">
      <table class="table table-hover table-striped table-bordered" style="overflow-x: auto; margin-top:10px; max-width: 80%;">
         <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Fabricante</th>
            <th>Teléfono Fabricante</th>
            <th>Origen</th>
         </tr>
         <?
            $res = verProductos();
            while ($producto = mysqli_fetch_array($res)){ ?>
         <tr>
            <td><? echo $producto['idproducto']?></td>
            <td><? echo $producto['nombre']?></td>
            <td><? echo $producto['categoria']?></td>
            <td><? echo $producto['tipo']?></td>
            <td><? echo $producto['descripcion']?></td>
            <td>$<? echo $producto['precio']?></td>
            <td><? echo $producto['stock']?></td>
            <td><? echo $producto['fabricante']?></td>
            <td><? echo $producto['telefono']?></td>
            <td><? echo $producto['origen']?></td>
         </tr>
         <? } ?>
      </table>
   </div>
   </form>
</div>
</body>
</html>
