
<?php
if (!isset($_POST["nombre"]) || !isset($_POST["categoria"]) || !isset($_POST["precioinicial"])|| !isset($_POST["preciofinal"]) || !isset($_POST["descuento"])|| !isset($_POST["unidadcantidad"])|| !isset($_POST["detalles"])|| !isset($_POST["caducidad"])) {
    echo $_POST["nombre"]." cat " . $_POST["categoria"]." inic " . $_POST["precioinicial"]." final " .$_POST["preciofinal"] ." dess " .$_POST["descuento"]." unid ".$_POST["unidadcantidad"]." det ".$_POST["detalles"],
    
    
    exit("Faltan datos");
}
include_once "funciones.php";
guardarProducto($_POST["nombre"], $_POST["categoria"], $_POST["precioinicial"],$_POST["preciofinal"],$_POST["descuento"],$_POST["unidadcantidad"],$_POST["caducidad"],$_POST["detalles"]);
header("Location: stock.php?stock=1");

