
<?php include_once "encabezado.php" ?>
<div   style="width: 70%; float:left">
    <div class="column is--third">
        <h2 class="is-size-2">Nuevo producto</h2>
        <form action="guardar_producto.php" method="post">
        <div class="table">
            <table class="table">
                <tr>
                    <td colspan="2"><h1>ingresar Nuevo Articulo</h1></td>
                </tr>
                <tr>
                    <td colspan="2"> Nombre Articulo</td>
                   
                </tr>
                <tr>
                    <td colspan=""><input required id="nombre"  type="text" placeholder="Nombre" name="nombre"size="60px"></td>
                    <td colspan=""><input required id="presentacion"  type="text" placeholder="Presentacion" name="presentacion"size="20px">

                    <select   placeholder="unidad" name="unidad" size="1">
                            <?php
                                $uni = unidadMedida();
                                foreach ($uni as $c) { 
                            ?>
                                        <option value= <?php echo $c->id_unidad ?> ><?php echo $c->umedida ?></option>
                            <?php   } ?>
                    </select>
                    </td>
                </tr><tr>
                    <td>Seleccione Categoria</td>
                    <td> Perecedero</td>
                </tr>
                <tr>
                    <td><select   placeholder="categoria" name="categoria" size="1">
                            <option value="">---  ---</option>
                            <?php
                                $catg = categoria();
                                foreach ($catg as $categoria_art) { 
                            ?>
                                        <option value= <?php echo $categoria_art->id_tipoArt ?> ><?php echo $categoria_art->tipoArti ?></option>
                            <?php   } ?>
                        </select>
                    </td>
                    <td>
                          <input type="radio" name="caducidad" value="si">Si
                          <input type="radio" name="caducidad" value="no">No
                    </td>
                </tr>
                <tr>
                    <td>Precio Inicial</td>
                    <td>Precio Final</td>
                </tr>
                <tr>
                    <td><input required id="precioinicial" name="precioinicial"  type="number" placeholder="Precio inicial"size="30px"></td>
                    <td><input  required id="preciofinal" name="preciofinal"  type="number" placeholder="Precio Final"size="30px"></td>
                </tr>
                <tr>
                    <td>Limite Descuento</td>
                    <td>Unidad/cantidad de Venta</td>
                </tr>
                <tr>
                    <td><input required id="desceunto" name="descuento"  type="number" placeholder="Descuentoo"size="30px"></td>
                    <td><select   placeholder="Unidad/Cantidad" name="unidadcantidad" size="1">
                            
                            <?php
                                $cnt = cantidad();
                                foreach ($cnt as $cant) { 
                            ?>
                                        <option value= <?php echo $cant->id ?> ><?php echo $cant->unidadVenta ?></option>
                            <?php   } ?>
                        </select>
                    <input type="checkbox" id="proActive" name="proActive"  value="1"> </td>
                </tr>
                <tr>
                    <td colspan="2"><textarea name="detalles" rows="10" cols="90"  placeholder="Detalles"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">                  
                        <button class="button is-success">Guardar</button>
                        <a href="productos.php" class="button is-warning">Volver</a>
                     </td>
                </tr>
                
            </div>

            </table>
        </div>    
        
        </form>
    </div>
</div>

<div  style="width: 20%; float:right">
     <div ><td><h5 class="is-size-4">calcular Precio:</h5> </td>
        <div class="field"> 
            <table>
            <tr>
                <td><h5 class="is-size-6">Precio Inicial:</h5> </td>
                <td><h5 class="is-size-6">%:</h5> </td>  
            </td>
            </tr>
            <tr>
                <td><h5 class="is-size-6"><input type="text"  size="15px"  id="precio"></h5> </td>
                <td><h5 class="is-size-6"><input type="text"  size="5px"  id="porcentaje"></h5> </td>  
            </td>
            </tr>
            <tr>
                <td ><h5 class="is-size-6"><input type="text"  size="15px"  id="preciof" placeholder="Prefio Final"></h5> </td>
                <td ><input type="button" onclick="Sumar()" name="suma" value="Calcular"></td>
            </td>
            </tr>


            </table>
        </div>



        <script type="text/javascript">
            function Sumar(){
            var precio=Number(document.getElementById('precio').value);
            var porcentaje=Number(document.getElementById('porcentaje').value);

            var result=precio*porcentaje/100+precio;

            document.getElementById('preciof').value=result;

            }
        </script>
    </div>
<?php 

include_once "pie.php"; ?>