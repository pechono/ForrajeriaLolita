<?php include_once "encabezado.php" ?>



<form action="guardar_cliente.php" method="post">
           
          <div style = "float: Right;  width: 900px;"> 
                <table class="table">
                  <tr >
                        <td>id</td>
                        <td >Apellido</td>
                        <td>Nombre</td>
                        <td>Telefono</td>
                        </tr>
                       <?php 
                       $proveedor=cliente();
                        foreach($proveedor as $p){
                        echo '<tr><td>'.$p->id_cliente.'</td>';
                        echo '<td>'.$p->apellido.'</td>'; 
                        echo '<td>'.$p->nombre.'</td>';
                        echo '<td>'.$p->telefono.'</td></tr>';
                        }
                    ?>
                </table>
            </div>
           
   <div style = " width: 400px;">
          <table class="table">
          </tr>
              <tr><td  <h2>Apellido </h2></td> </tr>
              <tr><td  <h2><input type="text" name="apellido" placeholder="Apellido"></h2>    </td> </tr>
              <tr><td  <h2>nombre</h2>    </td> </tr>
              <tr><td  <h2><input type="text" name="nombre" placeholder="nombre"></h2>    </td> </tr>    
              <tr><td  <h2>Telefono</h2>    </td> </tr>
              <tr><td  <h2><input type="text" name="telefono" placeholder="Telefono "></h2>    </td> </tr>    
                
              <tr><td  <h2>
                  <div class="control">
                                  <button class="button is-success">Guardar Cliente</button>
                                  <a href="productos.php" class="button is-warning">Volver</a>
                              </div>
                      </h2>    
                  </td> 
              </tr>    

          </table>
        </div>
</form>






<?php include_once "pie.php"; ?>