<?
function login($user, $pass){
  $con = mysqli_connect("localhost", "final", "final", "finalDB");
  $query = mysqli_query($con, "SELECT idusuario FROM usuario WHERE correo = '$user' AND contrasena = '$pass'");
  $rows = mysqli_num_rows($query);
  if ($rows ==  1){
    return true;
  } else {
    return false;
  }
  mysqli_close($con);
}

function user_exists($mail){
  $con = mysqli_connect("localhost", "final", "final", "finalDB");
  $query = mysqli_query($con, "SELECT correo FROM usuario WHERE correo='$mail'");
  $rows = mysqli_num_rows($query);
  if ($rows ==  1){
    return true;
  } else {
    return false;
  }
}

function register($nombre, $apellido, $correo, $contrasena, $calle, $numero, $colonia, $cp, $fecha, $tarjeta){
  $con = mysqli_connect("localhost", "final", "final", "finalDB");
  $query = mysqli_query($con, "INSERT INTO usuario (nombre, apellido, correo, contrasena, calle, numero, colonia, cp, fecha, tarjeta) VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$calle', '$numero', '$colonia', '$cp', '$fecha', '$tarjeta')");
  mysqli_close($con);
}

function user_data($user_id){
  $data = array();
  $user_id = (int)$user_id;

  $data = mysql_fetch_assoc(mysql_query("SELECT * FROM 'usuario' WHERE 'id' = $user_id "));

  return $data;
}

function logged_in(){
  return (isset($_SESSION['id'])) ? true : false;
}






function verCart() {
  if (logged_in() === false){
    header('Location: index2.php');
  }else{
    header('Location: cart.php');
  }
}
?>
