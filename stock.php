
<?php include_once "encabezado.php";
include_once "funciones.php";
$productosg = obtenerProductos_general();

if($_GET["stock"]==1){
    foreach ($productosg as $producto) {
        $id_art=$producto->id_articulo;
        $nombre=$producto->nombre;
         $tamanio=$producto->tamanio;
         $tipo=$producto->tipoArti;
         $precioi=$producto->precio_inicial; 
         $preciof=$producto->precio_final;
         $unidac=$producto->id_unidadVenta; 
        
         $limite=$producto->limites_descuento;
         //$cant=$producto->cantidad ;
         $caducidad=$producto->caducidad; 
         $detalles=$producto->detalles ;
   }

//echo $id_art;



?>
<div  style="width: 45%; float:left">
    <div >
        <h2 class="is-size-2">Nuevo producto</h2>
        <form action="guardar_producto.php" method="post">
            <div class="field">
            <h5 class="is-size-6">Articulo:</h5> 
          
                <div >
                <h5 class="is-size-5"><b><?php echo $nombre ?></b></h5>
                </div>
            </div>
           <div  class="field">
            <h5 class="is-size-6">Presentacion:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo $tamanio ?></b></h5>
                </div>
            </div>
            <div class="field">
            <h5 class="is-size-6">Categoria:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo $tipo ?></b></h5>
                </div>
            </div>

            <div class="field">
            <h5 class="is-size-6">Precio Inicial:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo "$" .$precioi ?></b></h5>
                </div>
            </div><div class="field">
            <h5 class="is-size-6">Precio Final:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo "$" .$preciof ?></b></h5>
                </div>
            </div>
            <div class="field">
            <h5 class="is-size-6">Se Vende Por:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo $unidac ?></b></h5>
                </div>
            </div>
            <div class="field">
            <h5 class="is-size-6">Descuento Aplicable:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo $limite ?></b></h5>

                </div>
            </div>

            <div class="field">
            <h5 class="is-size-6">Caducidad:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo $caducidad ?></b></h5>
              
                </div>
            </div>
                <div class="field">
                <h5 class="is-size-6">Detalles del Producto:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo $detalles ?></b></h5>

                           
            </div>
            </div>

         
        </form>
    </div>
</div>




<div  style="width: 45%; float:right">
    <div >
        <h2 class="is-size-2">Cargar al inventario</h2>
        <form action="guardar_stock.php" method="post">
            <div class="field">
                <label for="nombre">Cantidad de Unidades</label>
                <div class="control">
                    <input size="25" required id="cantidad"  type="text" placeholder="Cantidad" name="cantidad">
                    <input size="25" required id="cantidad"  type="text" placeholder="Stock Minimo" name="minimo">
                    <input  type="hidden" value="<?php echo $id_art ?> " name="id_art">
                </div>
            </div>       

            <div class="field">
                <label for="descripcion">Proveedor</label>
                <div class="control">

                     <select  id="color" placeholder="Proveedor" name="proveedor" size="1">
                     <option value="0">ingresar un nuevo Proveedor</option>
                     <?php
                        include_once "funciones.php";
                        $proveedores = obtenerproveedor();
                        foreach ($proveedores as $proveedor) { 
                  
                                     ?>
	                    
	                    <option value=<?php echo "'" .$proveedor->id_proveedor. "'";?>> <?php echo $proveedor->nombre ."  ---  ".$proveedor->localidad ?> </option>
                        <?php
                              }
                  
                         ?>
                        </select>
           


                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-success">Guardar</button>
                    <a href="productos.php" class="button is-warning">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php 
} else{
//-------------------------------------------------------------------

            $productos = obtenerProductos();
            ?>


            <table summary="Inventario">
                <caption>inventario</caption>
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Articulo</th>
                        <th scope="col">Presentacion</th>
                        <th scope="col">Tipo Articulo</th>
                        <th scope="col">Precio Inicial</th>
                        <th scope="col">Precio Final</th>
                        <th scope="col">Unidad cant</th>
                        <th scope="col">Limite Descuento</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Detalles</th>
                        <th scope="col" colspam="3" style="width:50px">cantidad</th>





                    </tr>
                </thead>
            <?php foreach ($productos as $producto) { ?>
                <tbody>
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
                        <td><?php echo $producto->detalles ?></td>


<?php
if($_GET["stock"]=="MSt"){


?>
                        <form action="stockMcant.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo?>">
                               <td> <input type="text" name ="stock" size="10px"></td>
                              <td>
                                
                                <button class="button is-primary">
                                      Modifocar Stock
                                        </button> 
                               
                        </form></td>
<?php

}
if($_GET["stock"]=="MpC"){
?>
                       
                            <form action="cambiarPrecio.php" method="post">
                                        <input type="hidden" name="id_producto" value="<?php echo $producto->id_articulo ?>">
                                        <td> <button class="button is-primary">
                                            Cambiar Precio
                                        </button> </td>
                            </form>
                       
<?php
}

?>

                    </tr>
                    
                </tbody>

            <?php } ?>
            </table>






           
<?php 
            }
include_once "pie.php" ?>