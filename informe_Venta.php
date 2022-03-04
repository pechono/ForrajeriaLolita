
<?php include_once "encabezado.php";



include_once "funciones.php";
include_once "consultas.php";
$con=0;
//----------------------------------------
if (!isset($_POST["cliente"]) || $_POST["cliente"]=="" ){
    $cliente="1=2";
    $con++;
	echo "cliente    ";
}else{
  
    $cliente ="cliente.apellido like '%".$_POST["cliente"] ."%' OR cliente.nombre like '%".$_POST["cliente"]. "%'";
}

if (!isset($_POST["d"]) || $_POST["d"]==""){
    $descuento="1=2";
    //echo "no entre";
    $con++;
	echo "descuento  ";

}else{
    $descuento="operacion.descuento=".$_POST["d"];
}

if (!isset($_POST["detalles"])|| $_POST["detalles"]==""){
    $detalles="1=2";
	$con++;
	echo "detalles ";

}else{
    $detalles="operacion.detalles like '%".$_POST["detalles"] ."%' OR operacion.detalle like '%".$_POST["detalles"]. "%'";
}

if (!isset($_POST["monto"]) || $_POST["monto"]=="" ){
    $monto='1=2';
	$con++;
	echo "monto  ";

}else{
    $monto= $detalles="operacion.venta=".$_POST["monto"] ;
}

if (!isset($_POST["tipov"]) || $_POST["tipov"]==""){
    $tipov='1=2';
	$con++;
	echo "tipo  ";

}else{
    $tipov="operacion.id_tipoVenta=".$_POST["tipov"] ;
}

if (!isset($_POST["fecha"]) || $_POST["fecha"]==""){
    $fecha='1=2';
	$con++;
	echo "fecha  ";

}else{
    $fecha="operacion.fecha='".$_POST["fecha"]."'";
}
$sqlB="SELECT operacion.id_operacion, operacion.venta, operacion.fecha, operacion.descuento, operacion.detalle, "
." tipoventa.tipoventa, operacion.detalles, " 
." cliente.apellido, cliente.nombre "

." FROM operacion inner join tipoventa on operacion.id_tipoVenta=tipoventa.id_tipoventa "
." inner join cliente on cliente.id_cliente=operacion.id_cliente "
. " WHERE ". $cliente ."  OR ". $descuento ."  OR ".$detalles ." OR " .$monto. " OR ". $tipov ." OR ".$fecha;
echo $con;
if(!$con==6){
	$sqlB="SELECT operacion.id_operacion, operacion.venta, operacion.fecha, operacion.descuento, operacion.detalle, "
	." tipoventa.tipoventa, operacion.detalles, " 
	." cliente.apellido, cliente.nombre "
	
	." FROM operacion inner join tipoventa on operacion.id_tipoVenta=tipoventa.id_tipoventa "
	." inner join cliente on cliente.id_cliente=operacion.id_cliente ";

}

echo $sqlB;
?>

<?php
$a=false;
if (!isset($_GET["inf"])){
	$ventas = informeVenta();
	$mensaje="Ventas ";
}elseif($_GET["inf"]=="inf"){
	$ventas = informeVenta();
	$mensaje="Ventas ";

}elseif($_GET["inf"]=="D"){
	$ventas = informeVentaDiaria();
	$mensaje="Ventas Diarias  ".date('d-m-Y H:i:s');

	echo "mierdaaa";
}elseif($_GET["inf"]=="Ms"){
	$ventas = informeVentaMes();
	$mensaje="Ventas Diarias  ".date('M');

}elseif($_GET["inf"]=="Gnr"){
	$ventas = informeVentaGeneral($sqlB);
	$mensaje="Ventas ";
	$a=true;

}

?>



<div class="table">
   <table>

    <tr>

        <th align="center" colspan=3>informes
             de Ventas</th>
    </tr>    
	<form action="informe_Venta.php?inf=Gnr" method="post">
	    <tr>
            <th rowspan="4" align="right"><a href="informe_Venta.php?inf=inf" >Ventas</a> </th>
            <td aling="center"><a href="informe_Venta.php?inf=D" >Venta Diaria</a></td>
			<td aling="center"><?php 
								if($a==true){
								echo "<input type='text' placeholder='Buscar cliente' name='cliente'> </td>";
								echo "<td aling='center'><input type='date' placeholder='fecha' name='fecha'></td>";
								}?>
			
			<td aling="center" rowspan="4" border: #b2b2b2 1px solid>
			<?php 
								if($a==true){
								echo '<button class="button is-success is-large"><i >Buscar</i></button> </td>';
								   } ?>
			
			
		</tr>

        <tr>
            <td aling="center" ><a href="informe_Venta.php?inf=Ms" >Venta Mensuale</a></td>
			<td aling="right"><?php 
								if($a==true){
								echo "<input type='text' placeholder='Buscar Detalles' name='detalles'>";
								echo "<td aling='center'><select   placeholder='tipo de venta' name='tipov' size='1'>";
								echo "<option value= ''>Seleccionar</option>";
								$pagos = tipopago();
								foreach ($pagos as $pago) {
									?> 
									<option value= <?php echo $pago->id_tipoventa ?> ><?php echo $pago->tipoventa ."--".   $pago->interes?></option>
										
								<?php   } ?>
								</select>
								<?php }?>
								
			</td>


        </tr>
		
        <tr>

            <td aling="center"><a href="informe_Venta.php?inf=Gnr" >Venta General</a></td>
						<?php 
						if($a==true){?>
						<td aling="right"><input type='text' placeholder='Buscar Descuento' name='d'></td>
						<td aling='right'><input type='text' placeholder='Monto de Compra' name='monto'></td>

						<?php 	}?>

			


        </tr>

		</form>

        </table> 

</div>


<div class="table">
<table cellspacing="0" border="0">

	<colgroup span="9" width="69"></colgroup>
	<tr>
		<th colspan=9 align="center"><?php echo $mensaje;?>	</th>
	</tr>
	<tr>

		<td align="left" valign=bottom>id_operacion</td>
		<td align="left" valign=bottom><font>venta</td>
		<td align="left" valign=bottom><font>fecha</td>
		<td align="left" valign=bottom><font>descuento</td>
		<td align="left" valign=bottom><font>detalle</td>
		<td align="left" valign=bottom><font>tipoventa</td>
		<td align="left" valign=bottom><font>detalles</td>
		<td align="left" valign=bottom><font>Cliente</td>
		
	</tr>
<?php

//$ventas = informeVenta();
$bd = obtenerConexion();
iniciarSesionSiNoEstaIniciada();


foreach ($ventas as $venta) {
       
?>
	
	<tr>
		<td  align="left" valign=bottom><?php echo $venta->id_operacion?></td>
		<td align="left" valign=bottom><?php echo $venta->venta?></td>
		<td align="left" valign=bottom><?php echo $venta->fecha?></td>
		<td align="left" valign=bottom><?php echo $venta->descuento?></td>
		<td align="left" valign=bottom><?php echo $venta->detalle?></td>
		<td align="left" valign=bottom><?php echo $venta->tipoventa?></td>
		<td align="left" valign=bottom><?php echo $venta->detalles?></td>
		<td align="left" valign=bottom ><?php echo $venta->apellido. ", ".$venta->nombre ?> </td>
		
	</tr>
    <?php } ?>
	
</table>
</div>



<?php include_once"pie.php";