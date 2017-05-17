<?PHP
   session_start();
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
     } else if ($user == 'admin' && $pass == 'admin') {
         header('Location: ../php/admin.php');
     }else {
         $login= login($user, $pass);
         if ($login === false) {
           $error = "Tu usuario o contraseña son incorrectos";
         } else {
           $_SESSION['correo'] = $user;
           header('Location: ../php/index2.php');
         }
     }
   }


   /* REGISTRAR */
   if (isset($_POST['btnRegister'])) {
     /* VALIDAR VACIOS */
     if (empty($_POST["iuser_3"]) || empty($_POST["iuser_4"])|| empty($_POST["iuser_5"])|| empty($_POST["iuser_1"])
     || empty($_POST["iuser_2"]) || empty($_POST["iuser_6"]) || empty($_POST["iuser_7"])|| empty($_POST["iuser_8"])
     || empty($_POST["iuser_9"]) || empty($_POST["iuser_10"]) || empty($_POST["iuser_11"])) {
       $error = "Por favor llena todos los campos";
     }else if (!filter_var($_POST['iuser_3'], FILTER_VALIDATE_EMAIL)) {
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
