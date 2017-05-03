function arregloRegistro(){
    var textos = new Array();

        var i = 0;
        textos[i] = "Favor de ingresar su Nombre"; i++;
        textos[i] = "Favor de ingresar su Apellido"; i++;
        textos[i] = "Favor de ingresar su E-mail"; i++;
        textos[i] = "Favor de ingresar su Contraseña"; i++;

    return textos;
}

function arregloLogin(){
    var textos = new Array();
    var i = 0;
    textos[i] = "Favor de ingresar su usuario/email"; i++;
    textos[i] = "Favor de ingresar su contrasena"; i++;

    return textos;
}


function validarUsuarioLogin()
{
    var al = arregloLogin();
    cual = 0;
    if (!validarVacio("txt_usuario",al[cual]))
        return;
    cual++;
    if (!validarVacio("txt_contrasena",al[cual]))
        return;
    cual++;
    ajaxLogin();
}


function validarRegistro()
{
    document.getElementById("error1").innerHTML = "";
    var al = arregloRegistro();
    var obl = new Array();
    var oi = 0;
    obl[oi] = 3; oi++;
    obl[oi] = 4; oi++;
    obl[oi] = 5; oi++;
    obl[oi] = 1; oi++;
    obl[oi] = 2; oi++;
    obl[oi] = 6; oi++;
    obl[oi] = 7; oi++;
    obl[oi] = 8; oi++;
    obl[oi] = 9; oi++;
    cual = 0;
    for(var i2 = 0; i2 < oi; i2++)
    {
        if (!validarVacio("iuser_" + obl[i2],al[cual]))
            return;
        cual++;
    }
    if (!validateEmail("iuser_3", al[cual]))
        return;
        cual++;
    if (!validatePassword("iuser_4", al[cual]))
        return;
        cual++;
    if (!validarIgual("iuser_4","iuser_5", al[cual]))
        return;
        cual++;
    if (!validarChecked("chk_2", al[cual]))
        return;
        cual++;

    if (captcha)
        getParamRegi();
    else
        ajaxRegistro();
}


function ajaxLogin()
{

    document.getElementById("iuser_waiting").style.display="";
     var formObj = $("#form1");
    var formData = new FormData(document.getElementById('form1'));
    $.ajax({
        url: '../gadgets/iuser/ajax/validarLogin.php',
    type: 'POST',
        data:  formData,
    mimeType:"multipart/form-data",
    contentType: false,
        cache: false,
        processData:false
    }).done(function (response) {

        document.getElementById("iuser_waiting").style.display="none";
            if (response == "-1")
            {
                alerta1("Invalid login information, please try again");

            }
            else
            {
                top.window.location=top.window.location;
            }
    }).fail(function () {

    });
}

function ajaxOlvido()
{

    document.getElementById("iuser_waiting").style.display="";
     var formObj = $("#form2");
    var formData = new FormData(document.getElementById('form2'));
    $.ajax({
        url: '../gadgets/iuser/ajax/olvido.php',
    type: 'POST',
        data:  formData,
    mimeType:"multipart/form-data",
    contentType: false,
        cache: false,
        processData:false
    }).done(function (response) {

        document.getElementById("iuser_waiting").style.display="none";
            if (response == "OK")
            {
                alerta1("We have sent your password reset instructions to your e-mail");
            }
            else
            {
                alerta1(response);
            }
    }).fail(function () {

    });

}
function ajaxLogOut()
{
    // Create a function that will receive data sent from the server
    var ajaxRequest = ajaxFunction();
    ajaxRequest.onreadystatechange = function(){
        if(ajaxRequest.readyState == 4){
            var res = ajaxRequest.responseText;
            document.getElementById("iuser_waiting").style.display="none";
            var location = window.location.toString();
            if (location.indexOf("?code=") >= 0)
            {

                window.location = location.substring(0,location.indexOf("?code="));
            }
            else
                window.location = window.location;
        }
    }
    document.getElementById("iuser_waiting").style.display="";
    ajaxRequest.open("GET", "../gadgets/iuser/ajax/salir.php", true);
    ajaxRequest.send(null);
}

function ajaxRegistro()
{

    document.getElementById("iuser_waiting").style.display="";
    document.getElementById("signup").style.display = "none";
     var formObj = $("#form3");
    var formData = new FormData(document.getElementById('form3'));
    $.ajax({
        url: '../gadgets/iuser/ajax/email.php',
    type: 'POST',
        data:  formData,
    mimeType:"multipart/form-data",
    contentType: false,
        cache: false,
        processData:false
    }).done(function (response) {

        document.getElementById("iuser_waiting").style.display="none";
            if (response == "OK")
            {
                registerUser();
            }
            else
            {
                document.getElementById("signup").style.display = "";
                alerta1(response);
                document.getElementById("iuser_2").focus();
            }
    }).fail(function () {

    });


}

function registerUser()
{

    document.getElementById("iuser_waiting").style.display="";
     var formObj = $("#form3");
    var formData = new FormData(document.getElementById('form3'));
    $.ajax({
        url: '../gadgets/iuser/ajax/register.php',
    type: 'POST',
        data:  formData,
    mimeType:"multipart/form-data",
    contentType: false,
        cache: false,
        processData:false
    }).done(function (response) {

        document.getElementById("iuser_waiting").style.display="none";
            if (response == "OK") {
            window.location=window.location;
            }
            else
            {
                alerta1(response);
            }
    }).fail(function () {

    });

}
