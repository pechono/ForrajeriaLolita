<?php include_once "encabezado.php";
$i='false';
if (isset($_POST["id_articulo"])) {
    
    $id_art=$_POST["id_articulo"];
    


?>     
   <div style = " width: 600px; float: Center;">
   
   <form action="guardar_modArt.php" method="post">
  <?php $prod=obtenerProductos();
                foreach($prod as $p){
                        if ($id_art==$p->id_articulo ) {
                        
                            $id=$p->id_articulo; 
                            $nombre= $p->nombre;
                            $tamanio= $p->tamanio;
                            $tipo= $p->tipoArti;
                            $precioI= $p->precio_inicial;
                            $precioF= $p->precio_final;
                            $unidadV= $p->id_unidadVenta;
                            $limite= $p->limites_descuento;
                            $cantidad= $p->cantidad;
                            $caducidad= $p->caducidad;
                            $detalles= $p->detalles;
                            $uM=$p->umedida;
                            $presentacion=$p->presentacion;
                       }
                    }
        ?>
          <table class="table">
          
              <tr><td><h2>id </h2></td> <td  ><h2>articulo </h2></td> </tr>
              <tr><td  ><h2><input type="text" name="id" placeholder="" value="<?php echo $id; ?>"></h2>
              <td>  <h2><input type="text" name="nombre" placeholder="" value="<?php echo $nombre; ?>"></h2></tr>
              <tr><td  ><h2> </h2>Presentacion</td><td  ><h2> </h2>Categoria</td> </tr>
              <tr>
                  
                <td colspan=""><input required id="presentacion"  type="text" value="<?php echo $presentacion; ?>" placeholder="Presentacion" name="presentacion"size="20px">
                <select   placeholder="unidad" name="unidad" size="1">
                        <?php
                            $uni = unidadMedida();
                            foreach ($uni as $c) { 
                        ?>
                                    <option value= <?php echo $c->id_unidad ?> 
                                    <?php  if($uM==$c->umedida){ echo " selected='selected'";} ?>
                                    ><?php echo $c->umedida ?></option>
                        <?php   } ?>
                </select>
                <td><select   placeholder="categoria" name="categoria" size="1">
                            <option value="">---  ---</option>
                            <?php
                                $catg = categoria();
                                foreach ($catg as $categoria_art) { 
                            ?>
                                        <option value= <?php echo $categoria_art->id_tipoArt ?> 
                                                       <?php  if($tipo==$categoria_art->tipoArti){ echo " selected='selected'";} ?>
                                        ><?php echo $categoria_art->tipoArti ?></option>
                            <?php   } ?>
                        </select>
                    </td>
                </tr> 
                <tr><td  ><h2> Precio inicial</h2></td><td  ><h2> Precio Final</h2></td> </tr>
                <tr><td  ><h2><input type="text" name="precioI" placeholder="precio inicial" value="<?php echo $precioI; ?>"></h2>
                <td  ><h2><input type="text" name="precioF" placeholder="precio final" value="<?php echo $precioF; ?>"></h2></tr>
            
                <tr><td  ><h2> </h2>Unidad de Ventas</td> <td  ><h2> Limite Descuento</h2></td></tr>
                <tr>
                  <td  ><h2><input type="text" name="unidadv" placeholder="" value="<?php echo $unidadV; ?>"></h2>
                  <td  ><h2><input type="text" name="limite" placeholder="limite decuento" value="<?php echo $limite; ?>"></h2><td>       
                </tr>
              
                <tr><td  ><h2> </h2>Stock</td> <td><h2>caducidad </h2></td> </tr>
                <tr>
                  <td  ><h2><input type="text" name="cantidad" placeholder="cantidad" value="<?php echo $cantidad; ?>"></h2>
                  <td>
                        
                            <input type="radio" name="caducidad" value="si"<?php if($caducidad=="si"){ echo "checked";} ?>>Si
                            <input type="radio" name="caducidad" value="no"<?php if($caducidad=="no"){ echo "checked";} ?>>No
                  </td>
                </tr>
              <tr><td colspan="2">  <h2> Detalle</h2></td> </tr>
              <tr> 
                  <td colspan="2" ><h2><textarea rows="4" cols="70" name="detalles" placeholder="detalles" value="<?php echo $detalles; ?>"></textarea></textarea></h2></td>
              </tr>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <tr><td  ><h2>
                  <div class="control">
                                  <button class="button is-success">Guardar Cliente</button>
                                  <a href="productos.php" class="button is-warning">Volver</a>
                              </div>
                      </h2>    
                  </td> 
              </tr>    

          </table> 
          </form>
        </div>
<?php 
}
include_once "pie.php"; ?>