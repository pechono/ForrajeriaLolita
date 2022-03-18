
<?php include_once "encabezado.php" ?>


<form action="guardar_proveedor.php" method="post">

<div style = "float: right;"> 
        <table class="table">
        <tr>
          <td colspan=7>
             <label><h2>Proveedores Registrados</h2></label>
          </td>
        </tr>    
           <tr >
            <td>id</td>
            <td >Nombre Empresa</td>
            <td>Rubro</td>
            <td>Telefono</td>
            <td>Mail</td>
            <td>Direccion</td>
            <td>Locaidad</td>

          </tr>
          
          <?php 
         
          $proveedor=obtenerproveedor();
            foreach($proveedor as $p){
              echo '<tr><td>'.$p->id_proveedor.'</td>';
              echo '<td>'.$p->nombre.'</td>'; 
              echo '<td>'.$p->rubro.'</td>';
              echo '<td>'.$p->telefono.'</td>';
              echo '<td>'.$p->mail.'</td>';
              echo '<td>'.$p->direccion.'</td>';
              echo '<td>'.$p->localidad.'</td> </tr>';
             
            }
          ?>
          
      </table>

    </div>
  <div style = " width: 200px;" >
<table class="table">
    <tr><td >  <h2>Empresa</h2></td> </tr>
    <tr><td  > <h2><input type="text" name="empresa" placeholder="Nombre Empresa"></h2>    </td> </tr>
    <tr><td  >  <h2>Rubro Empresa</h2>    </td> </tr>
    <tr><td  ><h2><input type="text" name="rubro" placeholder="Rubro Empresa"></h2>    </td> </tr>    
    <tr><td  > <h2>Telefono</h2>    </td> </tr>
    <tr><td  > <h2><input type="text" name="telefono" placeholder="Telefono Empresa"></h2>    </td> </tr>    
    <tr><td  ><h2>Mail</h2>    </td> </tr>
    <tr><td  ><h2><input type="text" name="mail" placeholder="ail  Empresa"></h2>    </td> </tr>
    <tr><td  ><h2>Direccion Empresa</h2>    </td> </tr>
    <tr><td  ><h2><input type="text" name="direccion" placeholder="Direcion Empresa"></h2>    </td> </tr>   
    <tr><td  ><h2>Localidad</h2>    </td> </tr>
    <tr><td  ><h2><input type="text" name="localidad" placeholder="Localidad Empresa"></h2>    </td> </tr>    
    <tr><td  ><h2>
        <div class="control">
                        <button class="button is-success">Guardar</button>
                        <a href="productos.php" class="button is-warning">Volver</a>
                    </div>
            </h2>    
        </td> 
     </tr>    

</table>
</form>





<?php include_once "pie.php"; ?>