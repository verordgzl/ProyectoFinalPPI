<?PHP
   include_once 'funcUsuarios.php';

   if (isset($_POST['darAlta'])) {
     altaProductos();
   }

   if (isset($_POST['cambiarProducto'])) {
     cambiarProductos();
   }

   function fabricante(){
     $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $sql = ("SELECT * FROM fabricante");
     $res = mysqli_query($con, $sql);
     return $res;
     mysqli_close($con);
   }

   function categoria(){
     $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $sql = ("SELECT * FROM categoria");
     $res = mysqli_query($con, $sql);
     return $res;
     mysqli_close($con);
   }
   function verProductos(){
     $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $sql = "SELECT *, (SELECT nombre FROM fabricante f WHERE f.idfabricante=p.idfab) as fabricante,
     (SELECT telefono FROM fabricante f WHERE f.idfabricante=p.idfab) as telefono,
     (SELECT nombre FROM categoria c WHERE c.id=p.idcategoria) as categoria FROM producto p";
     $res = mysqli_query($con, $sql);
     return $res;
     mysqli_close($con);
   }

   function verHistorial(){
     $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $sql = "SELECT *, (SELECT correo FROM usuario u WHERE u.idusuario=h.idusuario) as usuario,
     (SELECT nombre FROM producto p WHERE p.idproducto=h.idproducto) as producto,
     (SELECT descripcion FROM producto p WHERE p.idproducto=h.idproducto) as descripcion, (SELECT precio FROM producto p WHERE p.idproducto=h.idproducto) as precio
      FROM historial h";
     $res = mysqli_query($con, $sql);
     if (!$res) {
        printf("Error: %s\n", mysqli_error($con));
     }
     return $res;
     mysqli_close($con);
   }

   function altaProductos(){
     $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $nombre = $_POST['nombre'];
     $idcategoria = $_POST['idcategoria'];
     $tipo = strtoupper($_POST['tipo']);
     $descripcion = $_POST['descripcion'];
     $foto = $_POST['foto'];
     $precio = $_POST['precio'];
     $stock = $_POST['stock'];
     $idfab = $_POST['idfab'];
     $origen = $_POST['origen'];
     $query = "INSERT INTO producto (nombre, idcategoria, tipo, descripcion, foto, precio, stock, idfab, origen) VALUES ('$nombre',' $idcategoria', '$tipo',
     '$descripcion', '$foto', '$precio', '$stock', '$idfab', '$origen')";
     $res = mysqli_query($con, $query);
     if (!$res) {
        printf("Error: %s\n", mysqli_error($con));
     } else{
       echo ("<div style='margin-top:70px; margin-bottom: -50px; font-size: 1.5em;' class='alert alert-success alert-dismissable fade in'>
       <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Producto dado de alta correctamente</strong></div>");
     }
     mysqli_close($con);
   }

   function cambiarProductos() {
     $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $id = $_POST['idproducto'];
     $campo = $_POST['op'];
     $cambio = $_POST['cambio'];

     switch ($campo) {
       case 1:
         $query = "UPDATE producto SET nombre = '$cambio' WHERE idproducto = $id";
         break;
       case 2:
         $cambio = strtoupper($cambio);
         $query = "UPDATE producto SET tipo = '$cambio' WHERE idproducto = $id";
         break;
       case 3:
         $query = "UPDATE producto SET descripcion = '$cambio' WHERE idproducto = $id";
         break;
       case 4:
         $query = "UPDATE producto SET foto = '$cambio' WHERE idproducto = $id";
         break;
       case 5:
         $query = "UPDATE producto SET precio = '$cambio' WHERE idproducto = $id";
         break;
       case '6':
         $cambio = (int) $cambio;
         $query = "UPDATE producto SET stock = $cambio WHERE idproducto = $id";
         break;
       case 7:
           $query = "UPDATE producto SET origen = '$cambio' WHERE idproducto = $id";
           break;
     }

     $res = mysqli_query($con, $query);

     if (!$res) {
        printf("Error: %s\n", mysqli_error($con));
     } else{
       echo ("<div style='margin-top:70px; margin-bottom: -50px; font-size: 1.5em;' class='alert alert-success alert-dismissable fade in'>
       <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Producto modificado correctamente</strong></div>");
     }
     mysqli_close($con);
   }

   ?>
