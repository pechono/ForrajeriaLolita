<?php
include_once "funciones.php";
if (isset($_POST["id"])){
    $id=$_POST["id"];
    abrirSuelto($id);
    echo "entro";
   header("Location:suelto.php");
}else{
    echo("no");
    header("Location:suelto.php");
}

?>

concat(articulo.presentacion, ' - ',unidadmedida.umedida) as tamanio, 
INNER JOIN unidadmedida ON unidadmedida.id_unidad=articulo.id_unidad
