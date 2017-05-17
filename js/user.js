var x;
x = $(document);
x.ready(inicializarEventos);

function inicializarEventos () {
  $("#carrito").hide();
  $("#historialUser").hide();
  $("#cinco").click(quitarCarrito);
  $("#seis").click(quitarHistorialUser);
}

function quitarCarrito() {
  $("#carrito").toggle(100);
}

function quitarHistorialUser(){
  $("#historialUser").toggle(100);
}
