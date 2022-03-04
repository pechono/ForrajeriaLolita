<?php
if (!isset($_POST["precioi"]) || !isset($_POST["preciof"]) || !isset($_POST["id_art"])) {
    
    
    exit("Faltan datos");
}
include_once "funciones.php";
cambiarPrecio($_POST["id_art"], $_POST["precioi"],$_POST["preciof"]);
header("Location: stock.php?stock=MpC");
?>