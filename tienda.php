
<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";

if(!isset($_GET["x"])){
	echo "error" ;
}elseif ($_GET["x"]==0){
	$productos = obtenerProductos();


}else{
	$productos = obtenerProductos_buscar($_GET["x"]);

}


//$productos = obtenerProductos();

?>

<div class="navbar-item">
                    <div class="buttons">
                        
                    <form action="tienda.php" method="GET">
                      
                      <input type="text" name="x" value="buscar">
                                          
                  </form>

                    </div>
                </div>
<table summary="a summary of recent major volcanic eruptions in the Pacific Northwest">
	<caption>Seleccione en articulo su venta</caption>
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">Articulo</th>
			<th scope="col">Tipo Articulo</th>
			<th scope="col">Precio Inicial</th>
			<th scope="col">Precio Final</th>
			<th scope="col"> Unidad cant</th>
			<th scope="col">Limite Descuento</th>
			<th scope="col">Stock</th>
			<th scope="col">Detalles</th>
			<th scope="col" colspam="4" style="width:50px">cantidad</th>





		</tr>
	</thead>
<?php foreach ($productos as $producto) { ?>
    <tbody>
		<tr>
			<th scope="row"><?php echo $producto->id_articulo ?></th>
			<td><?php echo $producto->nombre ?></td>
			<td><?php echo $producto->tipoArti ?></td>
			<td><?php echo $producto->precio_inicial ?></td>
			<td><?php echo $producto->precio_final ?></td>
			<td><?php echo $producto->id_unidadVenta ?></td>
			
			<td><?php echo $producto->limites_descuento ?></td>
			
				<?php
						if ($producto->cantidad<=$producto->stockMinimo) {?>
				<td style="color:red"; ><b><?php echo $producto->cantidad ?></b></td>
						<?php
						} else {
						?>
							<td ><?php echo $producto->cantidad ?></td>
						<?php
						}
						?>				
				
				




			<td><?php echo $producto->detalles ?></td>

			<?php if (productoYaEstaEnCarrito($producto->id_articulo)) { ?>
			<td>
				<form action="eliminar_del_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span></td>
							<td>
                            <button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                        </form>
			</td>
			<?php } else { ?>
			<td>
				<form action="agregar_al_carrito.php" method="post">
				<input type="text" id="name" name="cant_art" required 
       minlength="1" maxlength="8" size="10"></td>
	   <td>
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                            </button>
                </form>
			</td>
			<?php } ?>
		</tr>
		
	</tbody>

<?php } ?>



</table>
<?php include_once "pie.php" ?>