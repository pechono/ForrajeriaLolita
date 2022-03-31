<?php
include_once "funciones.php";




if (isset($_POST["categoria"]) && isset($_POST["detalles"])) {
    //agregarProductoAlCarrito($_POST["id_producto"], $_POST["cant_art"]);
    modificarCategoria($_POST["ctg"],$_POST["categoria"],$_POST["detalles"]);

   
    header("Location: modificar_categoria.php");
  
}else{
//insertarProveedores($_POST["empresa"],$_POST["telefono"],$_POST["rubro"],$_POST["direccion"],$_POST["localidad"],$_POST["mail"]);

  
  header("Location: modificar_categoria.php");
}