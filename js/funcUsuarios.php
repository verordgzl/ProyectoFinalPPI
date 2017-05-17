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

   function loginAdmin($user, $pass){
     if ($user == 'admin' && $pass == 'admin'){
       return true;
     } else {
       return false;
     }
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
     mysqli_close($con);
   }

   function register($nombre, $apellido, $correo, $contrasena, $calle, $numero, $colonia, $cp, $fecha, $tarjeta){
     $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $query = mysqli_query($con, "INSERT INTO usuario (nombre, apellido, correo, contrasena, calle, numero, colonia, cp, fecha, tarjeta) VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$calle', '$numero', '$colonia', '$cp', '$fecha', '$tarjeta')");
     mysqli_close($con);
   }

   function user_data($email){
     $con = mysqli_connect("localhost", "final", "final", "finalDB");
     $query = "SELECT * FROM usuario WHERE correo = '$email'";
     $res = mysqli_query($con, $query);
     $data = array();
     while ($data = mysqli_fetch_row($res)) {
       $_SESSION['id'] = $data[0];
       $_SESSION['nombre'] = $data[1];
       $_SESSION['correo'] = $data[3];
       $_SESSION['calle'] = $data[5];
       $_SESSION['numero'] = $data[6];
       $_SESSION['colonia'] = $data[7];
       $_SESSION['cp'] = $data[8];
       $_SESSION['tarjeta'] = $data[10];
     }
     return $data;
   }

   function logged_in(){
     return (isset($_SESSION['id'])) ? true : false;
   }

   ?>
