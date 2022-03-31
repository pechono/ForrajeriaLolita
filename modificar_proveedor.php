
<?php include_once "encabezado.php"; 
$i='false';
if (isset($_POST["prov"])) {
    $i='true'; 
    $c=$_POST["prov"];
    
} 
?>




<div style = "float: center  width: 900px;"> 
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
              echo '<td>'.$p->localidad.'</td> ';
             
              ?>
              <td>
              <form action="modificar_proveedor.php" method="post">               
                              <input type="hidden" name="prov" value="<?php echo $p->id_proveedor ?>">
                              <button class="button is-primary">
                                M. </button> 
                          </form>
              </td>
              </tr>
          <?php }?>
      </table>

    </div>
  <div style = " float:top width: 200px;" >
<table class="table">
<form action="guardar_modProveedor.php" method="post">
<?php $proveedor=obtenerproveedor();
                foreach($proveedor as $p){
                        if ($i=='true' && $c==$p->id_proveedor ) {
                        
                        $id=$p->id_proveedor;
                        $rubro=$p->rubro; 
                        $nombre=$p->nombre;
                        $telefono=$p->telefono;
                        $mail=$p->mail;
                        $direccion=$p->direccion;
                        $localidad=$p->localidad;
                       }
                    }
    ?>
    <tr><td >  <h2>Empresa</h2></td> </tr>
    <tr><td  > <h2><input type="text" value="<?php if ($i=='true') { echo $nombre;} ?>" name="empresa" placeholder="Nombre Empresa" size="40px"></h2>    </td> </tr>
    <tr><td  >  <h2>Rubro Empresa</h2>    </td> </tr>
    <tr><td  ><h2><input type="text" value="<?php if ($i=='true') { echo $rubro;} ?>" name="rubro" placeholder="Rubro Empresa"size="40px"></h2>    </td> </tr>    
    <tr><td  > <h2>Telefono</h2>    </td> </tr>
    <tr><td  > <h2><input type="text" value="<?php if ($i=='true') { echo $telefono;} ?>" name="telefono" placeholder="Telefono Empresa"size="40px"></h2>    </td> </tr>    
    <tr><td  ><h2>Mail</h2>    </td> </tr>
    <tr><td  ><h2><input type="text" value="<?php if ($i=='true') { echo $mail;} ?>" name="mail" placeholder="ail  Empresa"size="40px"></h2>    </td> </tr>
    <tr><td  ><h2>Direccion Empresa</h2>    </td> </tr>
    <tr><td  ><h2><input type="text" value="<?php if ($i=='true') { echo $direccion;} ?>" name="direccion" placeholder="Direcion Empresa"size="40px"></h2>    </td> </tr>   
    <tr><td  ><h2>Localidad</h2>    </td> </tr>
    <tr><td  ><h2><input type="text" value="<?php if ($i=='true') { echo $localidad;} ?>" name="localidad" placeholder="Localidad Empresa"size="40px"></h2>    </td> </tr>    
    <tr><td  ><h2>
    <input type="hidden" name="c" value="<?php echo $id; ?>">
        <div class="control">
                        <button class="button is-success">Guardar</button>
                        <a href="productos.php" class="button is-warning">Volver</a>
                    </div>
            </h2>    
        </td> 
     </tr>    
</form>
</table>






<?php include_once "pie.php"; ?>