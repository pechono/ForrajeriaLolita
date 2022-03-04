<?php include_once "encabezado.php";
include_once "funciones.php";



if (!isset($_POST["id_producto"])  ) {
    
    exit("no se envio datos
    ");
    
}
$productosg = obtenerProductos_general();
    foreach ($productosg as $producto) {
        if ($producto->id_articulo==$_POST["id_producto"]) {
            $id_art=$producto->id_articulo;
            $nombre=$producto->nombre;
             $tipo=$producto->tipoArti;
             $precioi=$producto->precio_inicial; 
             $preciof=$producto->precio_final;
             $unidac=$producto->id_unidadVenta; 
            
             $limite=$producto->limites_descuento;
             //$cant=$producto->cantidad ;
             $caducidad=$producto->caducidad; 
             $detalles=$producto->detalles ;
            # code...
        }
        
   }

//echo $id_art;



?>
<div  style="width: 40%; float:left">
    <div >
        <h2 class="is-size-2">Nuevo producto</h2>
       
            <div class="field">
            <h5 class="is-size-6">Articulo:</h5> 
          
                <div >
                <h5 class="is-size-5"><b><?php echo $nombre ?></b></h5>
                </div>
            </div>

            <div class="field">
            <h5 class="is-size-6">Categoria:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo $tipo ?></b></h5>
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

         
        
    </div>
</div>




<div  style="width:30%; float:left">
    <div >
        <h2 class="is-size-2">Cargar al inventario</h2>
        <form action="registrarCambioPrecio.php" method="post">
           
        
            <div class="field">
            <h5 class="is-size-6">Precio Inicial:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo "$" .$precioi ?></b></h5>
            </div>
           
            
            <div class="field">
            <h5 class="is-size-6">Precio Final:</h5> 
                <div class="control">
                <h5 class="is-size-5"><b><?php echo "$" .$preciof ?></b></h5>
            </div>

            <div class="control">
                <h5 class="is-size-3">Nuevo Precio Inicial:</h5>
                                     <input type="text" name ="precioi" size="10px" high="10px" value="<?php echo $precioi ?>">
                </div>
            </div>

            <div class="control">
                <h5 class="is-size-3">Nuevo Precio Final:</h5>
                                    <input type="text" name ="preciof" size="10px" value="<?php echo $preciof ?>" >

                </div>
            </div>


            <input  type="hidden" value="<?php echo $id_art ?> " name="id_art">
            <div class="field">
                <div class="control">
                    <button class="button is-success">Guardar</button>
                    <a href="productos.php" class="button is-warning">Volver</a>
                </div>
            </div>
        </form>

    </div>
</div>

<?php include_once "calcularPrecio.php";

    
