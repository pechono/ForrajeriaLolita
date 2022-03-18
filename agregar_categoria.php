
<?php include_once "encabezado.php" ?>


<form action="guardar_categoria.php" method="post">
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
            foreach($cat as $c){
              echo '<tr><td>'.$c->id_tipoArt.'</td>';
              echo '<td>'.$c->tipoArti.'</td>'; 
              echo '<td>'.$c->detalles.'</td></tr>';
              
             
            }
          ?>
          
      </table>

    </div>   
<div style = "float: Center;  width: 300px;">  
  <table class="table"> 
    <tr><td>  <h2>Categoria</h2></td> </tr>
    <tr><td>  <h2><input type="text" name="categoria" placeholder="Categoria"></h2></td> </tr>
    <tr><td>  <h2>Detalles</h2>    </td> </tr>
    <tr><td>  <h2><input type="text" name="detalles" placeholder="Detalles"></h2></td> </tr>    
    
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