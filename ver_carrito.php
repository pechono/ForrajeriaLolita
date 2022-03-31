


<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$total=0;
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
                <a href="tienda.php?x=0" class="button is-warning">Ver tienda</a>
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
                        <th>Sub Con descuento total</th>
                        <th>Aplicar descuento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $text=0;
                   // $total = 0;
                    foreach ($productos as $producto) {
                        $total =$total + $producto->precio_final*$producto->cantidad;
                        $text++;
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
                <td> <?php echo $producto->cantidad* $producto->precio_final?></td>
                <td><input type="text"  size="15px"  id="precio<?php echo $text ?>" value="<?php echo $producto->cantidad* $producto->precio_final?>" disabled="disabled" </td>
                <td><input type="text"  size="2px"  id="porcentaje<?php echo $text ?>" value="0"> </td>  
                <td ><input type="button" onclick="Sumar(<?php echo $text ?>)" name="suma" value="Calcular"></td>
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
                        <td colspan="1" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            <?php echo number_format($total, 2) ?>
                        </td>
                        <td>                        
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


    <div class="columns">
        <div class="column">
            <h2 class="is-size-2">Mi carrito de compras</h2>
            <form action="terminar_compra.php" method="post">
            
            <table class="table">
                <thead>
                    <tr>
                    <th>Seleccionar Cliente</th>
                    <th>Seleccionar Forma de pago</th>
                    <th>Total Sin Descuento</th>
                    <th>Total Con descuento</th>
                    <th>Descuento en Pesos</th>
                    <th>Detalles de Descuento</th> 
                    </tr>
                </thead>
                <tbody>
                   
                         <tr> 
                         
                         <th>
                         <select   placeholder="cliente" name="cliente" size="1">
                            <?php
                            
                            $Clientes = cliente();
                            foreach ($Clientes as $cliente) {
                                ?> 
                                <option value= <?php echo $cliente->id_cliente ?> ><?php echo $cliente->apellido .", ".$cliente->nombre ?></option>
                                
                                    
                            <?php   } ?>
                            </select>
                            </th>
                            <th>
                            <?php
                           
                            $pagos = tipopago();
                            foreach ($pagos as $pago) {
                                ?> 
                             
                            <input required type="radio" name="tipov" value=<?php
                            if( $pago->id_tipoventa==1){
                                echo "'".$pago->id_tipoventa ." ' checked";
                            }else{
                                 echo "'".$pago->id_tipoventa."'";   
                            }
                            ?> id="<?php echo $pago->id_tipoventa ?>"><?php 
                            
                                if($pago->id_tipoventa==1){
                                   echo '<label for="'.$pago->id_tipoventa .'"><img src="img/efectivo.png" width="40" height="40" align="top"></label>';
                                }elseif($pago->id_tipoventa==2){
                                    echo '<label for="'.$pago->id_tipoventa .'"><img src="img/tarjeta.png"width="40" height="40"align="top"></label>';
                                }elseif($pago->id_tipoventa==3){
                                   echo'<label for="'.$pago->id_tipoventa .'" onclick="entrega(3)" id="3"><img src="img/cuentacorriente.png"width="40" height="40"></label>';
                                }elseif($pago->id_tipoventa==4){
                                  echo  '<label for="'.$pago->id_tipoventa .'"><img src="img/canje.png"width="40" height="40"align="top"></label>';
                                }
                           // $pago->tipoventa ."--".   $pago->interes?>
                           
                        <?php   } ?>
                            </th>
                            <th>  <?php echo number_format($total, 2) ?></th>
                            <td><input type="text"  size="5px"  id="totaldesc" value="0"   size="15px"    disabled="disabled" ></td></th>
                            <td><input type="text"  size="5px" name="desc"  id="total" value=0   size="15px" ></td>
                            <th rowspan=2><textarea name="detallesdes" rows="4" cols="60"  placeholder="Detalles" value="-"></textarea></th>
                            <tr>
                                 <th colspan=1>Detalles de Operacion</th>
                                 <th colspan=1 text-align="right">Entrega en cuenta corriente</th>
                                 <td colspan=3><input type="text"  size="5px" name="entrega"  id="entrega"    size="15px"value="0"></td>
                            </tr>
                            <tr>
                                 <th colspan=7><textarea name="detallesop" rows="2" cols="211"  placeholder="Detalles" value="-"></textarea></th>
                            </tr>
                </tbody>
<script type="text/javascript">
    var i
    var precio=0;
    var porcentaje=0;
    var result;
    var acum=0;
    var totaldesc=<?php echo $total; ?>;
   
           function Sumar(id){
                i=id;
                precio=Number(document.getElementById('precio'+id).value);
                porcentaje=Number(document.getElementById('porcentaje'+id).value);
                result=precio-precio*porcentaje/100;
                res=precio*porcentaje/100;
                acum=acum+ res;

                t=totaldesc-acum;
                document.getElementById('porcentaje'+id).value=0;
                document.getElementById('precio'+id).value=result;
                document.getElementById('total').value=acum;
                document.getElementById('totaldesc').value=t;
                return result;
            }
            function vT()
    {
    var mensaje;
    var opcion = confirm("Desea Realizar la Venta");
    if (opcion == true) {
        mensaje = "1";
	} else {
	    mensaje = "0";
	}
	document.getElementById("msj").value = mensaje;
}

 </script>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong></strong></td>
                        <td colspan="2" class="is-size-4">
                            
                            <?php //echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <input type="hidden" name="total" value="<?php echo number_format($total, 2) ?>">

            <input type="text" name="msj" id="msj" readonly style="visibility:hidden;">
            <button class="button is-success is-large" onclick="vT()">
                                <i class="fa fa-check">Terminar Compra</i>
            </button>
            <form>
        </div>
    </div>







<?php } ?>
<?php include_once "pie.php" ?>
<script>

</script>