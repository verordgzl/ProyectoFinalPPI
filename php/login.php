<?
   include("../js/funcLogin.php");
   if(isset($_SESSION['correo'])){
     header("Location: user.php");
   }
   ?>
<? include 'head.php'; ?>
<div class="area_login">
<div align="center">
   <div class="top_txt"><b>USUARIO EXISTENTE</b></div>
   <div class="top_txt2">Escribe tu usuario y contraseña para accesar</div>
   <form name="form1" id="form1" method="post">
      <div class="error" id="error1"><? echo $error; ?></div>
      <div align="center">
         <div class="login_tit">Correo electrónico: *</div>
         <div class="login_box"><input type="text" name="txt_usuario" id="txt_usuario"></div>
         <div class="login_tit">Contraseña: *</div>
         <div class="login_box"><input type="password" name="txt_contrasena" id="txt_contrasena"></div>
      </div>
      <div><input type="submit" name="btnLogin" value="INICIAR SESIÓN" class="btn btn-info" style="margin-bottom:20px;"></div>
   </form>
   <div class="top_txt"><b>NUEVO USUARIO: CREAR REGISTRO</b></div>
   <div class="top_txt2">Llena el siguiente formulario, por favor:</div>
   <form name="form3" id="form3" method="post">
      <div class="error" id="error2"><? echo $error; ?></div>
      <div class="icontact_tabla">
         <div class="login_row">
            <div class="login_tit">Correo electrónico: *</div>
            <div class="login_box"><input type="text" name="iuser_3" id="iuser_3"></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Contraseña: *</div>
            <div class="login_box"><input type="password" name="iuser_4" id="iuser_4"></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Repite tu contraseña: *</div>
            <div class="login_box"><input type="password" name="iuser_5" id="iuser_5"></div>
         </div>
         <div class="login_row">
            <div class="section_txt"><b>INFORMACIÓN DE CONTACTO:</b></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Nombre: *</div>
            <div class="login_box"><input type="text"  name="iuser_1" id="iuser_1"></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Apellido: *</div>
            <div class="login_box"><input type="text" name="iuser_2" id="iuser_2"></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Fecha de Nacimiento: *</div>
            <div class="login_box"><input type="date" name="iuser_10" id="iuser_10"></div>
         </div>
         <div class="login_row">
            <div class="section_txt"><b>INFORMACIÓN DE DIRECCIÓN:</b></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Calle: *</div>
            <div class="login_box"><input type="text" name="iuser_6" id="iuser_6"></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Número: *</div>
            <div class="login_box"><input type="text" name="iuser_7" id="iuser_7"></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Colonia: *</div>
            <div class="login_box"><input type="text" name="iuser_8" id="iuser_8"></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Código Postal: *</div>
            <div class="login_box"><input type="text" name="iuser_9" id="iuser_9"></div>
         </div>
         <div class="login_row">
            <div class="login_tit">Número de Tarjeta: *</div>
            <div class="login_box"><input type="text" name="iuser_11" id="iuser11"></div>
         </div>
         <div><input type="submit" name="btnRegister" value="REGISTRAR" class="btn btn-info"></div>
         <span class="error" id="error3"><? echo $error; ?></span>
         <br></br>
   </form>
   </div>
</div>
</body>
</html>
