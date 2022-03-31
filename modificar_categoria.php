<?php include_once "encabezado.php";
$i='false';
if (isset($_POST["cat"])) {
    $i='true'; 
    $c=$_POST["cat"];
    echo $c;
} 
?>



<div style = "float: RIGHT;  width: 800px;">  
        <table class="table">
          <tr>
            <td colspan=3>
                <label><h2>Categorias Registradas</h2></label>
            </td>
          </tr>
            <tr >
              <th>id</th>
              <th >Categoria</th>
              <th>Detalles</th>
            </tr>
          
          <?php 
          // $sql = "SELECT `id_tipoArt`, `tipoArti`, `detalles` FROM `tipoart` WHERE 1";
          $cat=categoria();
            foreach($cat as $ct){
              echo '<tr><td>'.$ct->id_tipoArt.'</td>';
              echo '<td>'.$ct->tipoArti.'</td>'; 
              echo '<td>'.$ct->detalles.'</td>';
              ?>
              <td>
              <form action="modificar_categoria.php" method="post">               
                              <input type="hidden" name="cat" value="<?php echo $ct->id_tipoArt; ?>">
                              <button class="button is-primary">
                                Modifocar Cliente
                                  </button> 
                          </form>
              </td>
              </tr>
          <?php }?>
          
      </table>

    </div>   
<form action="guardar_modCategoria.php" method="post">

<div style = "float: Center;  width: 300px;">  
<?php 
                        $cat=categoria();

                             foreach($cat as $ct){                        
                               if ($i=='true' && $c==$ct->id_tipoArt ) {
                                    $id=$ct->id_tipoArt;
                                    $tipo=$ct->tipoArti; 
                                    $detalles=$ct->detalles;
                                 }
                    }
        ?>
  <table class="table"> 
    <tr><td>  <h2>Categoria</h2></td> </tr>
    <tr><td>  <h2><input type="text"value="<?php if ($i=='true') { echo $tipo;} ?>" name="categoria" placeholder="Categoria"></h2></td> </tr>
    <tr><td>  <h2>Detalles</h2>    </td> </tr>
    <tr><td>  <h2><input type="text"value="<?php if ($i=='true') { echo $detalles;} ?>" name="detalles" placeholder="Detalles"></h2></td> </tr>    
    <input type="hidden" name="ctg" value="<?php echo $id; ?>">

    <tr><td>  <h2>
        <div class="control">
                        <button class="button is-success">Guardar</button>
                        <a href="productos.php" class="button is-warning">Volver</a>
                    </div>
            </h2>    
        </td> 
     </tr>    

  </table>
</div>
</form>
<div style = "float: Right;  width: 300px;"> 
<tabla></tabla></div>





<?php include_once "pie.php"; ?>