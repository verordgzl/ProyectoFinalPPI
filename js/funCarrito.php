<?
session_start();

   function verCarrito() {
   	$id = $_SESSION['id'];
   	$con = mysqli_connect("localhost", "final", "final", "finalDB");
    $sql = ("SELECT *, (SELECT nombre FROM producto p WHERE p.idproducto=c.producto) as nombre,
   	(SELECT descripcion FROM producto p WHERE p.idproducto=c.producto) as descripcion,
   	(SELECT precio FROM producto p WHERE p.idproducto=c.producto) as precio
   	FROM carrito c WHERE usuario = $id");
    $res = mysqli_query($con, $sql);
    return $res;
    mysqli_close($con);
   }

	 function verHistorialUser() {
		 	$id = $_SESSION['id'];
			$con = mysqli_connect("localhost", "final", "final", "finalDB");
			$sql = ("SELECT *, (SELECT nombre FROM producto p WHERE p.idproducto = h.idproducto) as producto FROM historial h  WHERE idusuario = $id");
			$res = mysqli_query($con, $sql);
	    return $res;
			mysqli_close($con);
	 }

   ?>
