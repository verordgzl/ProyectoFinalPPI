<?
   include 'head.php';
   include("../js/funcLogin.php");
   include ("../js/funcAdmin.php");
   ?>
<div align="center" style="margin-top: 100px;">
<div class="top_txt"><b>LOGIN ADMINISTRADOR</b></div>
<div class="top_txt2">Escribe tu usuario y contraseña para accesar</div>
<form name="form1" id="form1" method="post">
   <div class="error" id="error1"><? echo $error; ?></div>
   <div align="center">
      <div class="login_tit">Usuario: *</div>
      <div class="login_box"><input type="text" name="txt_usuario" id="txt_usuario"></div>
      <div class="login_tit">Contraseña: *</div>
      <div class="login_box"><input type="password" name="txt_contrasena" id="txt_contrasena"></div>
   </div>
   <div><input type="submit" name="btnLoginAdmin" value="INICIAR SESIÓN" class="btn btn-info" style="margin-bottom:20px;"></div>
</form>
