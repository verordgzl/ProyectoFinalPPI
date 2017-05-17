var x;
x = $(document);
x.ready(inicializarEventos);

function inicializarEventos () {
  $("#prod").hide();
  $("#historial").hide();
  $("#alta").hide();
  $("#modificar").hide();
  $("#uno").click(quitarProductos);
  $("#dos").click(quitarHistorial);
  $("#tres").click(quitarAltas);
  $("#cuatro").click(quitarModificar);
}

function quitarProductos() {
  $("#prod").toggle(100);
}

function quitarHistorial() {
  $("#historial").toggle(100);
}

function quitarAltas() {
  $("#alta").toggle(100);
}

function quitarModificar() {
  $("#modificar").toggle(100);
}
