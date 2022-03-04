

<?php
if (!isset($_POST["cliente"]) || $_POST["cliente"]=="" ){
    $cliente="1=2";
    
}else{
  
    $cliente ="cliente.apellido like '%".$_POST["cliente"] ."%' OR cliente.nombre like '%".$_POST["cliente"]. "%'";
}

if (!isset($_POST["d"]) ){
    $descuento="1=2";
    echo "no entre";
    
}else{
    $descuento="operacion.descuento=".$_POST["d"];
}

if (!isset($_POST["detalles"])|| $_POST["detalles"]==""){
    $detalles="1=2";
    
}else{
    $detalles="operacion.detalles like '%".$_POST["detalles"] ."%' OR operacion.detalle like '%".$_POST["detalles"]. "%'";
}

if (!isset($_POST["monto"]) || $_POST["monto"]=="" ){
    $monto='1=2';
    
}else{
    $monto= $detalles="operacion.venta=".$_POST["monto"] ;
}

if (!isset($_POST["tipov"])){
    $tipov='1=2';
    
}else{
    $tipov="operacion.id_tipoVenta=".$_POST["tipov"] ;
}

if (!isset($_POST["fecha"])){
    $fecha='1=2';
    
}else{
    $fecha="operacion.fecha='".$_POST["fecha"]."'";
}




$sql="SELECT operacion.id_operacion, operacion.venta, operacion.fecha, operacion.descuento, operacion.detalle, "
." tipoventa.tipoventa, operacion.detalles, " 
." cliente.apellido, cliente.nombre "

." FROM operacion inner join tipoventa on operacion.id_tipoVenta=tipoventa.id_tipoventa "
." inner join cliente on cliente.id_cliente=operacion.id_cliente "
. " WHERE ". $cliente ."  OR ". $descuento ."  OR ".$detalles ." OR " .$monto. " OR ". $tipov ." OR ".$fecha;



header("Location: informe_Venta.php?b=".$sql);
?>

