
<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {
?>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Todavía no hay productos
                </h1>
                <h2 class="subtitle">
                    Visita la tienda para agregar productos a tu carrito
                </h2>
                <a href="tienda.php" class="button is-warning">Ver tienda</a>
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="columns">
        <div class="column">
            <h2 class="is-size-2">Mi carrito de compras</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Articulo</th>
                        <th>Precio</th>
                        <th>categoria</th>
                        <th>U/Cant</th>
                        <th>Limite Desc</th>
                        <th>Stock</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total =$total + $producto->precio_final*$producto->cantidad;
                    ?>
            <tr> 
                <th scope="row"><?php echo $producto->id_articulo ?></th>
                <td><?php echo $producto->nombre ?></td>
                <td><?php echo $producto->precio_final ?></td>
                <td><?php echo $producto->categoria ?></td>
                <td><?php echo $producto->id_unidadVenta ?></td>
                <td><?php echo $producto->limites_descuento ?></td>
                <td><?php echo $producto->stock ?></td>
                <td><?php echo $producto->cantidad ?></td>
                <td><?php echo $producto->cantidad* $producto->precio_final?></td>
                <td>
                                <form action="eliminar_del_carrito.php" method="post">
                                    
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>

                            
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <a href="terminar_compra.php" class="button is-success is-large"><i class="fa fa-check"></i>&nbsp;Terminar compra</a>
        
        
        </div>
    </div>


    <div class="columns">
        <div class="column">
            <h2 class="is-size-2">Mi carrito de compras</h2>
            <table class="table">
                <thead>
                    <tr>
                        
                    <th>id</th>
                    <th>Seleccionar Cliente</th>
                    
                            
                    <th>Seleccionar Forma de pago</th>
                    
                    <th>id</th>
                    <th>id</th>
                    <th>id</th>
                        
                    </tr>
                </thead>
                <tbody>
                   
                         <tr> 
                         <th>id</th>
                         <th>
                         <select   placeholder="cliente" name="cliente" size="1">
                            <?php
                            $total = 0;
                            $Clientes = cliente();
                            foreach ($Clientes as $cliente) {
                                ?> 
                                <option value= <?php echo $cliente->id_cliente ?> ><?php echo $cliente->apellido .", ".$cliente->nombre ?></option>
                                
                                    
                            <?php   } ?>
                            </select>
                            </th>
                            <th>
                         <select   placeholder="tipo de venta" name="tipov" size="1">
                            <?php
                            $total = 0;
                            $pagos = tipopago();
                            foreach ($pagos as $pago) {
                                ?> 
                                <option value= <?php echo $pago->id_tipoventa ?> ><?php echo $pago->tipoventa ."--".   $pago->interes?></option>
                                    
                            <?php   } ?>
                            </select>
                            </th>
                            
                            <th>id</th>
                            <th>id</th>
                            <th>id</th>


                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <a href="terminar_compra.php" class="button is-success is-large"><i class="fa fa-check"></i>&nbsp;Terminar compra</a>
        </div>
    </div>




<?php } ?>
<?php include_once "pie.php" ?>