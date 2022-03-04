
<?php include_once "encabezado.php" ?>


<div class="table">
<form action="guardar_cliente.php" method="post">
<table >
    <tr><td <h2>ingresar Nuevo Proveedor</h2></td>
        <td rowspan="12" collspam='3' >
            
  
  
        <div class="container">
          <label><h2>Clientes Registrados</h2></label>
        <div class="table"> 
        <table>
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
             
             
            }
          ?>
          
      </table>

    </div>
    </div> 
       </td>
    
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
</form>

</div>




<?php include_once "pie.php"; ?>