<?php
include_once "encabezado.php";
?>
<div class="table">
    <table class="table">
        <tr>
            <td colspan="6">
                Venta De artciulo Suelto
            </td>
        </tr>
        <tr>
            <td colspan="6">selecionar Articulo Para su Venta Suelto</td>
        </tr>
        <tr>
            <td>id</td>
            <td>Articulo</td>
            <td>Categoria</td>
            <td>Tipo Venta</td>
            <td>En Stock</td>
            <td>Abrir</td>
        </tr>
       
            <?php
            $sueltos=suelto();
            foreach ($sueltos as $s){
            ?>
             <tr>
            <td><?php echo $s->id_articulo; ?></td> 
            <td><?php echo $s->nombre; ?></td>
            <td><?php echo $s->tipoArti; ?></td>
            <td><?php echo $s->id_unidadVenta; ?></td>
            <td><?php echo $s->cantidad; ?></td>
            <td>
				<form action="eliminar_del_carrito.php" method="post">
                          
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;Abrir
                            </span></td>
							
                            
                        </form>
			</td>
           </tr> <?php }?>
        
    </table>
</div>

<?php
include_once "pie.php";
?>