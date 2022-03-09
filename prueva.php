<?php 
function productoYaEstaEnPedidoo($idProducto)
{
    $ids = ProductosEnPedido();
    foreach ($ids as $id) {
        if ($id == $idProducto) return true;
    }
    return false;
}



function ProductosEnPedido()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT `id_pedidoCar`, `id_articulo`, `cantidad` FROM `pedidocar` WHERE 1 = ?");
    $var = 1;
    $sentencia->execute([$var]);
    return $sentencia->fetchAll(PDO::FETCH_COLUMN);
}









?>