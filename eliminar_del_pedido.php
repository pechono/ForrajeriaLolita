<?php

include_once "funciones.php";
if (!isset($_POST["id_articulo"])) {
    exit("No hay id_articulo");
}
quitarProductoDelCarrito($_POST["id_articulo"]);
# Saber si redireccionamos a tienda o al carrito, esto es porque
# llamamos a este archivo desde la tienda y desde el carrito
if (isset($_POST["redireccionar_carrito"])) {
    header("Location: pedido.php");
} else {
   // header("Location: pedido.php");
}
