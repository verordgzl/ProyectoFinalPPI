<? include_once '../js/init.php'; include 'head.php'; include '../js/funcAdmin.php';
?>
<form method="post">

  <div><input type="submit" id="uno" name="btnverProductos" value="VER PRODUCTOS DEL INVENTARIO" class="btn btn-primary btn-lg"></div>
    <div class="table-responsive" id="productos">
      <table class="table table-hover table-striped table-bordered">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Categoria</th>
          <th>Tipo</th>
          <th>Descripcion</th>
          <th>Foto</th>
          <th>Precio</th>
          <th>Stock</th>
          <th>Fabricante</th>
          <th>Teléfono Fabricante</th>
          <th>Origen</th>
        </tr>
        <? while ($producto = mysql_fetch_array($res)){ ?>
          <tr>
            <td><? echo $producto['id']?></td>
            <td><? echo $producto['nombre']?></td>
            <td><? echo $producto['categoria']?></td>
            <td><? echo $producto['tipo']?></td>
            <td><? echo $producto['descripcion']?></td>
            <td><img src="../img/<? echo $producto['foto']?>"></td>
            <td><? echo $producto['precio']?></td>
            <td><? echo $producto['stock']?></td>
            <td><? echo $producto['fabricante']?></td>
            <td><? echo $producto['telefono']?></td>
            <td><? echo $producto['origen']?></td>
          </tr>

        <? } ?>

      </table>

    </div>
  <div><input type="submit" id="dos" name="btnverHistorial" value="VER HISTORIAL DE COMPRAS DE USUARIOS" class="btn btn-success btn-lg"></div>
  <div class="table-responsive" id="historial">
    <table class="table table-hover table-striped table-bordered">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Tipo</th>
        <th>Descripcion</th>
        <th>Foto</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Fabricante</th>
        <th>Teléfono Fabricante</th>
        <th>Origen</th>
      </tr>
      <? while ($producto = mysql_fetch_array($res)){ ?>
        <tr>
          <td><? echo $producto['id']?></td>
          <td><? echo $producto['nombre']?></td>
          <td><? echo $producto['categoria']?></td>
          <td><? echo $producto['tipo']?></td>
          <td><? echo $producto['descripcion']?></td>
          <td><img src="../img/<? echo $producto['foto']?>"></td>
          <td><? echo $producto['precio']?></td>
          <td><? echo $producto['stock']?></td>
          <td><? echo $producto['fabricante']?></td>
          <td><? echo $producto['telefono']?></td>
          <td><? echo $producto['origen']?></td>
        </tr>

      <? } ?>

    </table>

  </div>
  <div><input type="submit" id="tres" name="btnalta" value="DAR DE ALTA PRODUCTO NUEVO" class="btn btn-info btn-lg"></div>
    <div class="table-responsive" id="alta">
  <div><input type="submit" id="cuatro" name="btnmodificar" value="MODIFICAR PRODUCTO" class="btn btn-warning btn-lg"></div>
    <div class="table-responsive" id="modificar">

</form>
  </body>
</html>
