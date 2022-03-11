<?php
include_once "funciones.php";
include_once "encabezado.php";
$a=0;
$existe=ProductosEnPedido();
foreach($existe as $E){
    $a++;
}
$proveedor=$_POST["proveedor"];

if($a==0){
    echo "De seleccionar algun articulo para realizar el pedido. <a href='pedido.php'> Aqui</a>";
}else{
    ingresarOperacionPedido($proveedor);
    $oper=operacionPedido();
    foreach($oper as $E){
        $operacion=$E->id_operacionPedido;
    }
    $existe=ProductosEnPedido();
    foreach($existe as $E){
        ingresarPedido($operacion,$E->id_articulo,$E->cantidad);
    } 
}
borrarPedidoCar();
header("Location: pedido.php");
?>

<?php
include_once "pie.php"
?>