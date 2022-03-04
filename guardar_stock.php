
<?php
if (!isset($_POST["id_art"]) || !isset($_POST["cantidad"]) || !isset($_POST["proveedor"])) {
    
  echo   $_POST["id_art"] ."    " .$_POST["cantidad"]. "      ".$_POST["proveedor"];
    exit("Faltan datos");
}
include_once "funciones.php";
guardarstock($_POST["id_art"], $_POST["cantidad"],$_POST["proveedor"]);
header("Location: stock.php?stock=0");

