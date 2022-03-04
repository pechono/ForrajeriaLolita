
<?php
include_once "funciones.php";
if (isset($_POST["id_producto"]) && isset($_POST["cant_art"]) && $_POST["cant_art"]>=1) {
    agregarProductoAlCarrito($_POST["id_producto"], $_POST["cant_art"]);
    header("Location: tienda.php?x=0");

}else{
  exit("No hay id_producto");
  header("Location: tienda.php?x=0");
}