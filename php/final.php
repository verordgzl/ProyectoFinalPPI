<?
include 'head.php';
include '../js/funCarrito.php';
session_start();

if (isset($_POST['continue'])){
  $con = mysqli_connect("localhost", "final", "final", "finalDB");
  $total= $_POST['total'];
  $id = $_SESSION['id'];
  $res = verCarrito();
  while ($carrito = mysqli_fetch_array($res)){
    $producto = $carrito['producto'];
    $sql = ("INSERT INTO historial (idusuario, idproducto, total) VALUES ('$id', '$producto', '$total')");
    $res = mysqli_query($con, $sql);
    $sql = ("SELECT stock FROM producto WHERE idproducto = '$producto'");
    $res = mysqli_query($con, $sql);
    $stock = (int)$res - 1;
    $sql = ("UPDATE producto SET stock = $stock WHERE idproducto = $producto");
    $res = mysqli_query($con, $sql);
  }
  $sql = ("DELETE FROM carrito WHERE usuario='$id'");
  $res = mysqli_query($con, $sql);
}
?>
<div style="margin-top:50px;"class="alert alert-success">
  <strong>PAGO EXITOSO!</strong>Regresar al <a href="index2.php" class="alert-link">inicio</a>.
</div>
