<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Productos existentes</h2>
        
        <table class="table">
            <thead>
                <tr>
            <th scope="col">id</th>
			<th scope="col">Articulo</th>
            <th scope="col">Presentacion</th>
			<th scope="col">Tipo Articulo</th>
			<th scope="col">Precio Inicial</th>
			<th scope="col">Precio Final</th>
			<th scope="col"> unidad cant</th>
			<th scope="col">Limite Descuento</th>
			<th scope="col">Stock</th>
			<th scope="col">caducidad</th>
            <th scope="col">Detalles</th>
			<th scope="col" colspam="4" style="width:50px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                    <th scope="row"><?php echo $producto->id_articulo ?></th>
			<td><?php echo $producto->nombre ?></td>
            <td><?php echo $producto->tamanio ?></td>
			<td><?php echo $producto->tipoArti ?></td>
			<td><?php echo $producto->precio_inicial ?></td>
			<td><?php echo $producto->precio_final ?></td>
			<td><?php echo $producto->id_unidadVenta ?></td>
			
			<td><?php echo $producto->limites_descuento ?></td>
			<td><?php echo $producto->cantidad ?></td>
            <td><?php echo $producto->caducidad ?></td>
			<td><?php echo $producto->detalles ?></td>

                            <form action="producto_regEdit.php" method="post">
                                <input type="hidden" name="id_articulo" value="<?php echo $producto->id_articulo ?>">
                                
                                <td><button class="button is-primary" >
                                    Editar
                                </button>
                                </td>
                            </form>
                       
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>