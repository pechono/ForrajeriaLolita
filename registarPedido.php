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
borrarPedidoCar();

}
?>
<form action="imprimirPedido.php" method="post" target="_blank">
    <input type="hidden" name="op" value="<?php echo $operacion; ?>">
    <button class="button">Imprimir</button>
</form>