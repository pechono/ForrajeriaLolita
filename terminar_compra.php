
<?php
include_once "funciones.php";

 if( 1==1){

if (!isset($_POST["total"]) || !isset($_POST["desc"]) || !isset($_POST["tipov"])|| !isset($_POST["cliente"]) ) {
        echo $_POST["d"];
        exit("Faltan datos");
    }else{
 
        if(!isset($_POST["detallesdes"]) || !isset($_POST["detallesop"])){
            $detallesop="-";    
            $detallesdes="-";
        }

        $detallesop=$_POST["detallesop"];    
        $detallesdes=$_POST["detallesdes"];
        $tipov=$_POST["tipov"];
        $desc=$_POST["desc"];
        $cliente=$_POST["cliente"];
        $c=$_POST["cliente"];
        



# Es responsabilidad del programador hacer algo con los productos
//include_once "funciones.php";
$obt_total = obtenerProductosEnCarrito();
$bd = obtenerConexion();
//iniciarSesionSiNoEstaIniciada();
$idSesion = $_SESSION["idUsuario"];
//echo "fvklneoghnelirhgolhrg". $idSesion;
$t =0;
foreach ($obt_total as $obt) {
        $t =$t + $obt->precio_final*$obt->cantidad;
       //$descuento= $producto->limites_descuento;

}


$t=$t-$desc;

//$hoy = date("2022-02-12");
//$hoy= date("d"). "-" . date("m") . "-" .date("Y") ;
$hoy=date('Y-m-d');

$turno=$_SESSION["turno"];
$sentencia = $bd->prepare("INSERT INTO operacion (id_operacion, id_usuario, venta, fecha, descuento, detalle, id_tipoVenta, detalles, id_cliente, turno) VALUES (Null,?,?,?,?,?,?,?,?,?)");
$sentencia->execute([$idSesion, $t, $hoy,$desc,$detallesdes,$tipov,$detallesop,$cliente,$turno]);



$inset_op = operacion();
$bd = obtenerConexion();
iniciarSesionSiNoEstaIniciada();
$op=0;
foreach ($inset_op as $operacion_string) {
        $op=$operacion_string->id_operacion;
        
}

$productos = obtenerProductosEnCarrito();
$bd = obtenerConexion();
iniciarSesionSiNoEstaIniciada();
foreach ($productos as $producto) {
        $cant =$producto->cantidad;
       $id= $producto->id_articulo;
       $cant_stock=0;
        $stock_array = stock();
        foreach ($stock_array as $stock_list) {
               if($stock_list->id_articulo==$id){
                       $cant_stock=$stock_list->cantidad;
               }

        }
        
$cant_stock_res=$cant_stock-$cant; 
//echo $cant_stock_res." =cantida stock   ". $cant_stock . " - stock" .$cant ."      id". $id;

$sentencia = $bd->prepare("INSERT INTO `venta` (`id_venta`, `id_articulo`, `cantidad`, `id_operacion`) VALUES (Null, ?, ?, ?)");
$sentencia->execute([$id, $cant,$op]);

$sql = "UPDATE `stock` SET `cantidad` = '.$cant_stock_res.' WHERE `stock`.`id_articulo` = ".$id;

$sentencia = $bd->prepare($sql." and 1=?;");
$var=1;
$sentencia->execute([$var]);
}
//echo $sql;

$sentencia = $bd->prepare("TRUNCATE TABLE carrito ;");
$var=1;
$sentencia->execute();



if ($_POST["tipov"]==3 ) {
        $detalles_c="-";
        if (!isset($_POST["entrega"])){
                $monto=0;

        }else{
                $monto=$_POST["entrega"];
        }
        $m=$t-$monto;
        cuentaCoriente($op, $m,$hoy,$detalles_c,$c,$idSesion,$turno);  
       // $op, $monto,$fecha,$detalles,$id_cliente   
}
}


header("Location: tienda.php?x=0");
 }else{
        $bd = obtenerConexion();

        $sentencia = $bd->prepare("TRUNCATE TABLE carrito ;");
        $var=1;
        $sentencia->execute();
       header("Location: tienda.php?x=0");

    }