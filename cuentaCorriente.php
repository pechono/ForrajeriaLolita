<?php include_once "encabezado.php" 
//include_once "funciones.php";
?>
<div>
    <label><h1>Cuenta Corriente</h1></label>

</div>

<div>
    <form action=cuentaCorriente.php method="POST" onclick>
    <select name="cliente" onchange="this.form.submit()">
    <?php 
     $total="--" ;
     $cte="--" ;
    $clientes=cliente();
    foreach($clientes as $c){
         echo "<option value='". $c->id_cliente ."'";
          if(isset($_GET["x"]) &&  $_GET['x']==$c->id_cliente ){
                echo "selected > ";
                $cliente_id=$_GET["x"];
                $cuentaCorriente=obtener_cuentaCorriente($cliente_id);
                    foreach ($cuentaCorriente as $cC) {
                    $total=$cC->total ;
                    $cte=$cC->apellido .", ". $cC->nombre ;
                    
               }
         }
            echo ">". $c->apellido.", ".$c->nombre."</option>";
    }
    
    ?>
    }
    </select>
    </form>
</div>
<?php
           
            if(isset($_POST["cliente"])){
                $cliente_id=$_POST["cliente"];
                $cuentaCorriente=obtener_cuentaCorriente($cliente_id);
                    foreach ($cuentaCorriente as $cC) {
                    $total=$cC->total ;
                    $cte=$cC->apellido .", ". $cC->nombre ;
                    
               }
            }else{
               
                echo "no hay cliente idetificado";
            }
            

            ?>
<div class="table">
    <table><form action="cuentaCorriente_pago.php" method="post">
            <input type="hidden" name="id" value="<?php echo $cliente_id; ?>">
            <input type="text" name="msj" id="ejemplo" readonly style="visibility:hidden;">
           
        <tr>
            <th collspan="3" aling="center">Estado de cuenta</th>  <td>
        <tr> 
        <tr>
            <th align="right" > Cliente:       </th>  <td ><?php echo $cte ?></td><th align="left" rowspan=2>
           <div class="conteiner"></div>
            <div><input type="text" name="pago"  style="width:72px; height:30px" ><br></div>
            <div><button class="button is-success" onclick="alerta()">Pagar</button></div>
            </div>
            </th>
        <tr>
            <th align="right"> Deuda:       </th><td> <font size=6 color="red"><?php echo $total ?></font> </td>
            
        </tr>
        <tr>
             
           

            
        </tr>
    </form></table>
</div>
<?php include_once "pie.php"; ?>
<script>
function alerta()
    {
    var mensaje;
    var opcion = confirm("Desea Realizar la Venta");
    if (opcion == true) {
        mensaje = "1";
	} else {
	    mensaje = "0";
	}
	document.getElementById("ejemplo").value = mensaje;
}
</script>