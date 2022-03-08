
<?php
if (!isset($_POST["id_art"]) || !isset($_POST["cantidad"]) || !isset($_POST["proveedor"]) || !isset($_POST["minimo"])) {
    
  //echo   $_POST["id_art"] ."    " .$_POST["cantidad"]. "      ".$_POST["proveedor"];
    exit("Faltan datos");
}
include_once "funciones.php";
guardarstock($_POST["id_art"], $_POST["cantidad"],$_POST["proveedor"], $_POST["minimo"] );
header("Location: stock.php?stock=0");

