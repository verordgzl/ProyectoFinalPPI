<?
include("header.php");
include("top.php");
?>

<div class="area_login">
<div align="center">


    <div class="top_txt">USUARIO EXISTENTE</div>
    <div class="top_txt2">Escribe tu usuario y contraseña para accesar</div>

    <form name="form1" id="form1" method="post">
      <div id="error3"></div>
        <div align="center">
          <div class="login_tit">E - mail: *</div>
          <div class="login_box"><input type="text" name="txt_usuario" id="txt_usuario"></div>
          <div class="login_tit">Password: *</div>
          <div class="login_box"><input type="password" name="txt_contrasena" id="txt_contrasena"></div>
        </div>
      <div><input type="button" id="login" value="INICIAR SESIÓN" class="log_button" onClick="validarUsuarioLogin()"></div>
    </form>

    <div class="top_txt">NUEVO USUARIO: CREAR REGISTRO</div>
    <div class="top_txt2">Llena el siguiente formulario, por favor:</div>

    <form name="form3" id="form3" method="post">
    <div id="error1"></div>
    <div class="icontact_tabla">
    <div class="login_row"><div class="login_tit">E - mail: *</div><div class="login_box"><input type="text" name="iuser_3" id="iuser_3"></div></div>
    <div class="login_row"><div class="login_tit">Contraseña: *</div><div class="login_box"><input type="password" name="iuser_4" id="iuser_4"></div></div>
    <div class="login_row"><div class="login_tit">Repite tu contraseña: *</div><div class="login_box"><input type="password" name="iuser_5" id="iuser_5"></div></div>
    <div class="login_row"><div class="section_txt">INFORMACIÓN DE CONTACTO:</div></div>
    <div class="login_row"><div class="login_tit">Nombre: *</div><div class="login_box"><input type="text"  name="iuser_1" id="iuser_1"></div></div>
    <div class="login_row"><div class="login_tit">Apellido: *</div><div class="login_box"><input type="text" name="iuser_2" id="iuser_2"></div></div>
    <div class="login_row"><div class="section_txt">INFORMACIÓN DE DIRECCIÓN:</div></div>
    <div class="login_row"><div class="login_tit">Calle: *</div><div class="login_box"><input type="text" name="iuser_6" id="iuser_6"></div></div>
    <div class="login_row"><div class="login_tit">Número: *</div><div class="login_box"><input type="text" name="iuser_7" id="iuser_7"></div></div>
    <div class="login_row"><div class="login_tit">Colonia: *</div><div class="login_box"><input type="text" name="iuser_8" id="iuser_8"></div></div>
    <div class="login_row"><div class="login_tit">Código Postal: *</div><div class="login_box"><input type="text" name="iuser_9" id="iuser_9"></div></div>
    <input type="checkbox" name="chk_2" id="chk_2"><div  class="ignore">&nbsp;Acepto los términos y condiciones</div></div>
    <div><input type="button" id="signup" value="REGISTRAR" class="log_button" onClick="validarRegistro('<? echo($idioma) ?>',true)"></div>

</form>


</div>
</div>
