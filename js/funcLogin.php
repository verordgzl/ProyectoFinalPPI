<?PHP
include_once 'funcUsuarios.php';
$error="";
$user="";
$pass="";
$login= $register = "";
$nombre= $apellido= $correo= $contrasena= $calle= $numero= $colonia= $cp= $fecha = '';
/* LOGIN */
if(isset($_POST['btnLogin'])){
  $user = $_POST['txt_usuario'];
  $pass = $_POST['txt_contrasena'];
  /* VALIDAR VACIOS */
  if (empty($user) || empty($pass)){
      $error = "Ingresa tus datos";
  } else {
      $login= login($user, $pass);
      if ($login === false) {
        $error = "Tu usuario o contraseña son incorrectos";
      } else {
        $_SESSION['email'] = $user;
        header('Location: ../php/index2.php');
      }
  }
}


/* REGISTRAR */
if (isset($_POST['btnRegister'])) {
  /* VALIDAR VACIOS */
  $required_fields = array('iuser_3','iuser_4','iuser_5','iuser_1','iuser_2','iuser_6','iuser_7','iuser_8', 'iuser_9', 'iuser_10', 'iuser_11');
  foreach ($_POST as $key => $value) {
    if (empty($value) && in_array($key, $required_fields) === true) {
      $error = "Por favor llena todos los campos";
      break 1;
    }
  }
     if (!filter_var($_POST['iuser_3'], FILTER_VALIDATE_EMAIL)) {
    /* VALIDAR OTROS YA QUE NO HAYA VACÍOS*/
      $error = "Correo inválido";
    } else if ($_POST['iuser_4'] !== $_POST['iuser_5']){
      $error = "Contraseñas no coinciden";
    } else {
      $nombre = $_POST['iuser_1'];
      $apellido = $_POST['iuser_2'];
      $correo = $_POST['iuser_3'];
      $contrasena = $_POST['iuser_4'];
      $calle = $_POST['iuser_6'];
      $numero = $_POST['iuser_7'];
      $colonia = $_POST['iuser_8'];
      $cp = $_POST['iuser_9'];
      $fecha = $_POST['iuser_10'];
      $tarjeta = $_POST['iuser_11'];

      if (user_exists($_POST['iuser_3']) === true){
        $error = "Este correo ya está dado de alta";
      }else {
        register($nombre, $apellido, $correo, $contrasena, $calle, $numero, $colonia, $cp, $fecha, $tarjeta);
        $error = "Usuario registrado exitosamente";
      }
  }
}

?>
