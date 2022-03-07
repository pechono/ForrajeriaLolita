<?php
  date_default_timezone_set('America/Argentina/La_Rioja');
  iniciarSesionSiNoEstaIniciada();
  




function obtenerProductosEnCarrito()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
   $sql = "SELECT articulo.id_articulo, articulo.nombre, "
    . "  articulo.precio_final, articulo.limites_descuento, articulo.id_unidadVenta,"
    . " carrito.cantidad, stock.cantidad as stock, tipoart.tipoArti as categoria "
    . "FROM articulo INNER JOIN"
    . "  carrito ON articulo.id_articulo = carrito.id_art INNER JOIN"
    . "  stock ON carrito.id_art = stock.id_articulo INNER JOIN"
    . "  tipoart ON tipoart.id_tipoArt = articulo.id_tipo ";
    $sentencia = $bd->prepare($sql ." WHERE 1=?");
    $var=1;
    $sentencia->execute([$var]);
    return $sentencia->fetchAll();
}




function quitarProductoDelCarrito($idProducto)
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
   
    $sentencia = $bd->prepare("DELETE FROM carrito WHERE id_art = ?");
    return $sentencia->execute([$idProducto]);
}

function obtenerProductos()
{    
    $bd = obtenerConexion();
    $sql_obtener = "SELECT articulo.id_articulo, articulo.nombre, tipoart.tipoArti,\n"
    . "  articulo.precio_inicial, articulo.precio_final, articulo.limites_descuento,\n"
    . "  articulo.id_unidadVenta, stock.cantidad, articulo.detalles,articulo.caducidad, articulo.activo\n"
    . "FROM articulo INNER JOIN\n"
    . "  stock ON articulo.id_articulo = stock.id_articulo INNER JOIN\n"
    . "  tipoart ON tipoart.id_tipoArt = articulo.id_tipo\n"
    . "WHERE articulo.activo = 1;";
    $sentencia = $bd->query($sql_obtener);
    return $sentencia->fetchAll();
}
function productoYaEstaEnCarrito($idProducto)
{
    $ids = ProductosEnCarrito();
    foreach ($ids as $id) {
        if ($id == $idProducto) return true;
    }
    return false;
}



function ProductosEnCarrito()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT id_art, cantidad FROM carrito WHERE '1' = ?");
    $var = 1;
    $sentencia->execute([$var]);
    return $sentencia->fetchAll(PDO::FETCH_COLUMN);
}
function obtenerIdsDeProductosEnCarrito()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sql = "SELECT articulo.id_articulo, articulo.nombre, tipoart.tipoArti,\n"
    . "  articulo.precio_inicial, articulo.precio_final, articulo.limites_descuento,\n"
    . "  articulo.id_unidadVenta, stock.cantidad, articulo.detalles, articulo.activo\n"
    . "FROM articulo INNER JOIN\n"
    . "  stock ON articulo.id_articulo = stock.id_articulo INNER JOIN\n"
    . "  tipoart ON tipoart.id_tipoArt = articulo.id_tipo\n"
    . "WHERE articulo.activo = 1;";
    $sentencia = $bd->prepare($sql);
    return $sentencia->fetchAll(PDO::FETCH_COLUMN);
}

function agregarProductoAlCarrito($idProducto,$cant_art)
{
    // Ligar el id del producto con el usuario a través de la sesión
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $bd->prepare("INSERT INTO carrito ( cantidad, id_art) VALUES (?, ?)");
    return $sentencia->execute([$cant_art, $idProducto]);
}

function iniciarSesionSiNoEstaIniciada()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}

function eliminarProducto($id)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("DELETE FROM productos WHERE id = ?");
    return $sentencia->execute([$id]);
}

function guardarProducto($nombre, $categoria, $precioinicial,$preciofinal,$descuento,$unidadcantidad,$caducidad,$detalles)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("INSERT INTO articulo (id_articulo, nombre, id_tipo, precio_inicial, precio_final, limites_descuento, id_unidadVenta, caducidad, detalles, activo) VALUES (NULL ,?, ?, ?,?, ?, ?,?,?,?)");
    $a=1;
    return $sentencia->execute([$nombre, $categoria, $precioinicial,$preciofinal,$descuento,$unidadcantidad,$caducidad,$detalles,$a]);
}

function obtenerVariableDelEntorno($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("El archivo de las variables de entorno ($file) no existe. Favor de crearlo");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
    }
}
function obtenerConexion()
{
    $password = obtenerVariableDelEntorno("MYSQL_PASSWORD");
    $user = obtenerVariableDelEntorno("MYSQL_USER");
    $dbName = obtenerVariableDelEntorno("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
//-----------------operacion

function operacion()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT id_operacion FROM operacion WHERE 1=?");
    $var=1;
    $sentencia->execute([$var]);
    return $sentencia->fetchAll();
}
//-----------------stock
function stock()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT id_stock,id_articulo,cantidad FROM stock WHERE 1=?");
    $var=1;
    $sentencia->execute([$var]);
    return $sentencia->fetchAll();
}
//--------------
function venta()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sql = "SELECT venta.id_venta, venta.id_articulo, articulo.nombre, tipoart.tipoArti,\n"
    . "  articulo.precio_final, venta.cantidad, operacion.fecha, operacion.id_operacion\n"
    . "FROM venta INNER JOIN\n"
    . "  articulo ON articulo.id_articulo = venta.id_articulo INNER JOIN\n"
    . "  operacion ON operacion.id_operacion = venta.id_operacion INNER JOIN\n"
    . "  tipoart ON tipoart.id_tipoArt = articulo.id_tipo,\n"
    . "  stock";
    $sentencia = $bd->prepare($sql ." WHERE 1=?");
    $var=1;
    $sentencia->execute([$var]);
    return $sentencia->fetchAll();
}

function guardarcategoria($categoria, $detalles)
{
    $bd = obtenerConexion();
    $sql = "INSERT INTO tipoart (id_tipoArt, tipoArti, detalles) VALUES (NULL, \'farmacia\', \'elentos especificos para animales\');";

    $sentencia = $bd->prepare("INSERT INTO tipoart (id_tipoArt, tipoArti, detalles) VALUES(NULL, ?, ?)");
    return $sentencia->execute([$categoria, $detalles]);
}


function obtenerProductos_general()
{    
    $bd = obtenerConexion();
    
    $sql_obtener = "SELECT articulo.id_articulo, articulo.nombre, tipoart.tipoArti,\n"

    . "  articulo.precio_inicial, articulo.precio_final, articulo.limites_descuento,\n"

    . "  articulo.id_unidadVenta, articulo.detalles,articulo.caducidad, articulo.activo\n"

    . "FROM articulo INNER JOIN\n"


    . "  tipoart ON tipoart.id_tipoArt = articulo.id_tipo\n"

    . "WHERE articulo.activo = 1;";
 
    $sentencia = $bd->query($sql_obtener);


    return $sentencia->fetchAll();
}
function obtenerproveedor()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
  
    $sentencia = $bd->prepare("SELECT * FROM proveedor WHERE 1=?");
    $var=1;
    $sentencia->execute([$var]);
    return $sentencia->fetchAll();
}
function guardarstock($id_art, $cantidad,$proveedor)
{
    $bd = obtenerConexion();
//$sql = "INSERT INTO tipoart (id_tipoArt, tipoArti, detalles) VALUES (NULL, \'farmacia\', \'elentos especificos para animales\');";

    $sentencia = $bd->prepare("INSERT INTO stock (id_stock, id_articulo, cantidad, id_proveedor) VALUES (NULL, ?,?, ?);");

    return $sentencia->execute([$id_art,$cantidad, $proveedor]);
}
function obtenerProductos_buscar($buscar)
{    
    $bd = obtenerConexion();
    
    $sql_obtener = "SELECT articulo.id_articulo, articulo.nombre, tipoart.tipoArti, articulo.precio_inicial, articulo.precio_final, articulo.limites_descuento, articulo.id_unidadVenta, stock.cantidad, articulo.detalles,articulo.caducidad, articulo.activo  \n"

    . "\n"

    . "FROM articulo INNER JOIN stock ON articulo.id_articulo = stock.id_articulo INNER JOIN tipoart ON tipoart.id_tipoArt = articulo.id_tipo \n"

    . "WHERE articulo.activo = 1 and articulo.nombre LIKE '%".$buscar. "%' OR articulo.detalles LIKE '%".$buscar. "%' OR tipoart.tipoArti LIKE '%".$buscar. "%';";

    $sentencia = $bd->query($sql_obtener);


    return $sentencia->fetchAll();
}
function cambiarPrecio($id,$pI,$pF)
{    
    $bd = obtenerConexion();
    
    $sql = "UPDATE articulo SET precio_inicial = '".$pI."', precio_final = '".$pF."' WHERE articulo.id_articulo =".$id;

    $sentencia = $bd->query($sql);


    return $sentencia->fetchAll();
}
function cliente()
{    
    $bd = obtenerConexion();
    
    $sql = "SELECT id_cliente, apellido, nombre, telefono FROM cliente WHERE 1";

    $sentencia = $bd->query($sql);


    return $sentencia->fetchAll();
}

function tipopago()
{    
    $bd = obtenerConexion();
    
    $sql = "SELECT id_tipoventa, tipoventa, detalles, interes FROM tipoventa WHERE 1";

    $sentencia = $bd->query($sql);


    return $sentencia->fetchAll();
}



function cambiarStock($id,$stock)
{    
    $bd = obtenerConexion();
    
    //$sql = "UPDATE articulo SET precio_inicial = '".$pI."', precio_final = '".$pF."' WHERE articulo.id_articulo =".$id;
    $sql = "UPDATE stock SET cantidad = '".$stock."' WHERE stock.id_articulo = '".$id."'";

    $sentencia = $bd->query($sql);


    return $sentencia->fetchAll();
}

function cuentaCoriente($op, $monto,$fecha,$detalles,$id_cliente,$usuario,$turno)
{
    $bd = obtenerConexion();
    $sql = "INSERT INTO cuentacorriente(id_cuentaCorriente, operacion, monto, fecha, detalles,id_cliente,id_usuario,id_turno) VALUES (NULL,?,?,?,?,?,?,?)";
    $sentencia = $bd->prepare($sql);
    return $sentencia->execute([$op, $monto,$fecha,$detalles,$id_cliente,$usuario,$turno]);
}
function insertarProveedores($nombre, $telefono, $rubro,$direccion, $localidad, $mail)
{
    $bd = obtenerConexion();
    $sql = "INSERT INTO proveedor (id_proveedor, nombre, telefono, rubro, direccion, localidad, mail)"
    ." VALUES (NULL,?,?,?,?,?,?)";

    $sentencia = $bd->prepare($sql);
    return $sentencia->execute([$nombre, $telefono, $rubro,$direccion, $localidad, $mail]);
}
function obtener_cuentaCorriente($id)
{$bd = obtenerConexion();
    
    $sql = "SELECT sum(monto) as total,cliente.apellido,cliente.nombre \n"
    . "FROM cuentacorriente INNER JOIN cliente ON cuentacorriente.id_cliente=cliente.id_cliente\n"
    . "WHERE cliente.id_cliente=".$id;
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function insertarcliente($apellido, $nombre, $telefono)
{
    $bd = obtenerConexion();
    $sql = "INSERT INTO cliente (id_cliente, apellido, nombre, telefono)"
    ." VALUES (NULL,?,?,?)";

    $sentencia = $bd->prepare($sql);
    return $sentencia->execute([$apellido, $nombre, $telefono]);
}
function categoria()
{
    $bd = obtenerConexion();
    $sql = "SELECT id_tipoArt, tipoArti, detalles FROM tipoart WHERE 1";
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function insertarCategoria($categoria, $detalles)
{
    $bd = obtenerConexion();
    $sql = "INSERT INTO tipoart (id_tipoArt, tipoArti, detalles)"
    ." VALUES (NULL,?,?)";

    $sentencia = $bd->prepare($sql);
    return $sentencia->execute([$categoria, $detalles]);
}
function usuario()
{
    $bd = obtenerConexion();
    $sql = "SELECT id_usuario, usuario, clave, apellido, nombre,telefono FROM usuario WHERE 1";
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function obtenerUsuario($id)
{
    $bd = obtenerConexion();
    $sql = "SELECT id_usuario, usuario, clave, nombre,apellido FROM usuario WHERE id_usuario=".$id;
    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
function ingresarCierre($usuario,$turno,$fecha,$efectivo,$tarjeta, $corriente,$canje, $pago,$total,$ganancia)
{
    $bd = obtenerConexion();
    $sql="INSERT INTO cierrecaja (id_cierre, id_usuario, turno, fecha, efectivo, tarjeta, cCorriente, canje, pagoEnCuentaC, Total, ganancia) VALUES"
    ." (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $sentencia = $bd->prepare($sql);
    return $sentencia->execute([$usuario,$turno,$fecha,$efectivo,$tarjeta, $corriente,$canje, $pago,$total,$ganancia]);
}

function cierreCaja($where)
{
    $bd = obtenerConexion();

    $sql = "SELECT `id_cierre`,efectivo, `tarjeta`, `cCorriente`, `canje`, `pagoEnCuentaC`, `Total`, `ganancia`,\n "
    . "turno, usuario.apellido, usuario.nombre, fecha "
    . "FROM cierrecaja \n"
    . "INNER join usuario ON usuario.id_usuario=cierrecaja.id_usuario "
    . " WHERE ".$where;

    $sentencia = $bd->query($sql);
    return $sentencia->fetchAll();
}
