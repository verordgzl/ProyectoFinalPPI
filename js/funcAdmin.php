<?PHP

if (isset($_POST['btnverProductos'])){
  verProductos();
} else if (isset($_POST['btnverHistorial'])){
  verHistorial();
} else if (isset($_POST['btnalta'])) {
  altaProductos();
} else if (isset($_POST['btnmodificar'])){
  modficarProductos();
}



function verProductos(){
  $sql = "SELECT *, (SELECT nombre FROM fabricante f WHERE f.idfabricante=p.idfab) as fabricante,
  (SELECT telefono FROM fabricante f WHERE f.idfabricante=p.idfab) as telefono,
  (SELECT nombre FROM categoria c WHERE c.id=p.idcategoria) as categoria FROM producto p";
  $res = mysql_query($sql);
  return $res;
}

function verHistorial(){
  $sql = "SELECT *, (SELECT nombre FROM usuario u WHERE u.idusuario=h.idusuario) as usuario,
  (SELECT nombre FROM producto p WHERE p.idproducto=h.idproducto) as producto,
  (SELECT descripcion FROM producto p WHERE p.idproductp=h.idproducto) as descripcion FROM historial h";
  $res = mysql_query($sql);
  return $res;
}

function altaProductos(){

}

function modficarProductos(){

}


?>
