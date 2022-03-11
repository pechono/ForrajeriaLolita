<?php
include_once "funciones.php";
include_once "encabezado.php"
?>
<div class="table">
    <table class="table">
        <tr>
            <td>id</td>
            <td>Articulo</td>
            <td>Categoria</td>
            <td>Precio Inicial </td>
            <td>Precio final</td>
            <td>En estock</td>
            <td>Stock Minimo</td>
            <td>Proveedor</td>
        </tr>   
        <?php
        $stocks=stockPedido();
        foreach ($stocks as $sk) {
    
        ?>
        <tr>
            <td><?php echo $sk->id_articulo; ?> </td>
            <td><?php echo $sk->nombre; ?> </td> 
            <td><?php echo $sk->tipoArti; ?> </td> 
            <td><?php echo $sk->precio_inicial; ?></td> 
            <td><?php echo $sk->precio_final; ?></td> 
            
                <?php 
                    if($sk->diferencia <0){
                ?>
                    <td style="color:red"; ><b><?php echo $sk->cantidad ?></b></td>
                <?php
                    }else{
                ?>        
                        <td><b><?php echo $sk->cantidad ?></b></td>
                <?php
                    }
                ?> 
            
            <td><?php echo $sk->stockMinimo; ?> </td>
            <td><?php echo $sk->proveedor; ?> </td>
            <?php if (productoYaEstaEnPedidoo($sk->id_articulo)) { 
                ?>
			<td>
				<form action="eliminar_del_pedido.php" method="post">
                            <input type="hidden" name="id_articulo" value="<?php echo $sk->id_articulo;?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span></td>
							<td>
                            <button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                </form>
			</td>
			<?php 
            } else { ?>
							<form action="agregar_al_pedido.php" method="post">
                    <td>
                        <input type="text" id="name" name="cant_art" required minlength="1" maxlength="8" size="10">
                    </td>
                    <td>
                                    <input type="hidden" name="id_articulo" value="<?php echo $sk->id_articulo ?>">
                                    <button class="button is-primary">
                                        <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                                    </button>
                        
                    </td>
                </form>

			<?php }
            } ?>
            <tr><form action="registarPedido.php" method="post">
			<td colspan=10></td>
		</tr>
		<tr>
			<td colspan=8 align="right">
                <h1>Seleccionar Proveedor</h1>
            <select name="proveedor">
                <?php
                 $p=obtenerproveedor();
                 foreach($p as $oP){
                   echo '<option value="'.$oP->id_proveedor.'">'.$oP->nombre."-".$oP->localidad.'</option>';
                 }
                 
                ?>
            </select>
                </td>
                <td>
				<button class="button">Realizar Pedido</button>
            
			</td>
        </form>
		</tr>
    </table>

</div>
