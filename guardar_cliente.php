<?php
include_once "funciones.php";




if (isset($_POST["apellido"]) && isset($_POST["nombre"]) && isset($_POST["telefono"])) {
    //agregarProductoAlCarrito($_POST["id_producto"], $_POST["cant_art"]);
    insertarcliente($_POST["apellido"],$_POST["nombre"],$_POST["telefono"]);

  
    header("Location: agregar_cliente.php");
  
}else{
//insertarProveedores($_POST["empresa"],$_POST["telefono"],$_POST["rubro"],$_POST["direccion"],$_POST["localidad"],$_POST["mail"]);

  
  header("Location: agregar_cliente.php");
}