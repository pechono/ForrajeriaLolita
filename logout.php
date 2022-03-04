<?php
include_once "funciones.php";
if( $_POST["msj"]==1){
unset($_SESSION["idUsuario"]);
unset($_SESSION["turno"]);
header("Location: index.php");

}else{
header("Location: tienda.php?x=0");


}
?>