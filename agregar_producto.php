
<?php include_once "encabezado.php" ?>
<div   style="width: 70%; float:left">
    <div class="column is--third">
        <h2 class="is-size-2">Nuevo producto</h2>
        <form action="guardar_producto.php" method="post">
            <div >
            <h5 class="is-size-4">Nombre</h5>
                <div class="control">
                    <input required id="nombre"  type="text" placeholder="Nombre" name="nombre"size="80px">
                </div>
            </div>

            


            <div id="contenedor"">
                <div>
                     <h5 class="is-size-4">Categoria</h5>
                    <div >

                        <select   placeholder="categoria" name="categoria" size="1">
                        <option value="">---  ---</option>
                        <?php
                            include_once "funciones.php";
                            $catg = categoria();
                            foreach ($catg as $categoria_art) { 
                        ?>
                                    <option value= <?php echo $categoria_art->id_tipoArt ?> ><?php echo $categoria_art->tipoArti ?></option>
                        <?php   } ?>
                            </select>
            


                            </div>
                
                </div>
                        
                <div >
                            <h5 class="is-size-4">Perecedero</h5>
                            <div >
                                <input type="radio" name="caducidad" value="si">Si
                                <input type="radio" name="caducidad" value="no">No
                                </div>
                         
                                </div>


            </div>

                              <br>

                <div  id="contenedor"> 

                    <div  >
                    <h5 class="is-size-4">Precio Inicial</h5>
                        <div >
                            <input required id="precioinicial" name="precioinicial"  type="number" placeholder="Precio inicial"size="30px">
                        </div>
                    
                    </div>



                    <div >
                    <h5 class="is-size-4">Precio Final</h5>
                        <div>
                        <input  required id="preciofinal" name="preciofinal"  type="number" placeholder="Precio Final"size="30px">
                        </div>
                    </div>

                </div>
                <br>

                <div  id="contenedor"> 

                    <div class="field" >
                    <h5 class="is-size-4">Limite de descuento:</h5>                         <div >
                        <input required id="desceunto" name="descuento"  type="number" placeholder="Descuentoo"size="30px">
                        </div>
                    
                    </div>



                    <div >
                    <h5 class="is-size-4">Unidad/Cantidad de Venta</h5>
                        <div>
                        <input required id="unidadcantidad" name="unidadcantidad"  id="unidadcantidad" cols="30" rows="15" placeholder="unidadcantidad" required></textarea>
                        </div>
                    </div>

                </div>


                <div class="field">
                        <h5 class="is-size-4">Detalles</h5>
                        <div class="control">

                            <textarea name="detalles" rows="10" cols="90"  placeholder="Detalles"></textarea>
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