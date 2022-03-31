<?php include_once "encabezado.php";
$i='false';
if (isset($_POST["cliente"])) {
    $i='true'; 
    $c=$_POST["cliente"];
    echo $c;
} 

?>
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
                        echo '<td>'.$p->telefono.'</td>';
                       
                    ?>
                    <td>
                    <form action="modificar_cliente.php" method="post">               
                                    <input type="hidden" name="cliente" value="<?php echo $p->id_cliente ?>">
                                    <button class="button is-primary">
                                      Modifocar Cliente
                                        </button> 
                                </form>
                    </td>
                    </tr>
                <?php }?>
                </table>
           
            </div>
     
   <div style = " width: 400px;">
   
   <form action="guardar_modCliente.php" method="post">
  <?php $proveedor=cliente();
                foreach($proveedor as $p){
                        if ($i=='true' && $c==$p->id_cliente ) {
                        
                        $id=$p->id_cliente;
                        $apellido=$p->apellido; 
                        $nombre=$p->nombre;
                        $telefono=$p->telefono;
                       }
                    }
        ?>
          <table class="table">
          </tr>
              <tr><td  <h2>Apellido </h2></td> </tr>
              <tr><td  <h2><input type="text" name="apellido" placeholder="Apellido" value="<?php if ($i=='true') { echo $apellido;} ?>"></h2>    </td> </tr>
              <tr><td  <h2>nombre</h2>    </td> </tr>
              <tr><td  <h2><input type="text" name="nombre" placeholder="nombre" value="<?php if ($i=='true') { echo $nombre;} ?>"></h2>    </td> </tr>    
              <tr><td  <h2>Telefono</h2>    </td> </tr>
              <tr><td  <h2><input type="text" name="telefono" placeholder="Telefono "value="<?php if ($i=='true') { echo $telefono;} ?>"></h2>    </td> </tr>    
              <input type="hidden" name="cliente" value="<?php echo $id; ?>">
              <tr><td  <h2>
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
       







<?php include_once "pie.php"; ?>