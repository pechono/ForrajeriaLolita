<?php 
include_once ("funciones.php");

if (!isset($_SESSION["idUsuario"])) {
  echo !isset($_SESSION["idUsuario"]);
  exit("Primero debe ingresar al sisteman<br><a href='index.php'>regresar al inicio</a>");
  //echo "<br><a href='index.php'>regresar al inicio</a>";

} 




?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forrajeria Lolita</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
<style type="text/css">
body {
 
color: #000;
background: #efefef;
font-family: Helvetica, Arial, sans-serif;
text-align: center;
}
#page {
width: 600px;
text-align: left;
margin: 0 auto;
padding: 2em;
background: #fff;
}

/* the table */

table {
width: 100%;
border: 1px solid #999;
text-align: left;
border-collapse: collapse;
margin: 0 0 1em 0;
caption-side: top;
}

caption, td, th {
padding: 0.3em;
}

th, td {
border-bottom: 1px solid #999;

}

caption {
font-weight: bold;
font-style: italic;
}

#contenedor {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align:center;
}

#contenedor > div {
  width: 50%;
  align:center;
}
#header {
      margin:auto;
      width:600px;
      font-family:Arial, Helvetica, sans-serif;
    }
    ul, ol {
      list-style:none;
    }
    .nav li a {
      background-color:#000;
      color:#fff;
      text-decoration:none;
      padding:10px 15px;
      display:block;
      
    }
    .nav li a:hover{
      background-color: #434343;
    }
    .nav > li {
      float:left;
    }
    .nav li ul {
      display: none;
      position: absolute;
      min-width: 140px;
    }
    .nav li:hover >ul {
      display: block;
    }
    .nav li ul li {
      position: relative;
    }
    .nav li ul li ul {
      right:-140px;
      top:0px;
    }






</style>
<body>

<nav class="navbar navbar-light" style="background-color: #42F106;" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" >
                <img alt="" src="img/lolita.png" style="max-height: 80px" />
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu">
           
        
            <div class="navbar-start">
            
                <div id="header">
                        <ul class="nav">
                            <li><a class="" href="tienda.php?x=0">Venta</a></li>
                                <li>
                                    <a class="" href="productos.php">Productos</a>
                                        <ul>
                                            <a  href="stock.php?stock=0">Inventario</a></li>
                                            <a class="" href="stock.php?stock=MpC">Modificar Precio</a></li>
                                            <a class="" href="stock.php?stock=MSt">Incrementar Stock</a></li>
                                        </ul>
                                </li>
                            <li><a href="informes.php">informes</a>
                           </li>
                            <li><a href="agregar_proveedor.php">Proveedores</a></li>
                            <li><a class="" href="cuentaCorriente.php">Cuenta Corriente</a>
                            
                          </li>
                            <li><a href="agregar_cliente.php">clientes</a></li>
                            <li><a href="agregar_categoria.php">categoria</a></li>
                            <li><a href="cierrecaja.php">cierre de caja</a></li>
                            <li><a href="cierrecaja_Anterio.php">cierre de caja anteriores</a></li>
                            <li><a href="pedido.php">pedido a proveedores</a></li>
                        </ul>
                </div>
            </div>
           
           
           
           
           
           
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="button is-success">
                            <strong>Vender <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i>
                            </strong>
                        </a>
                    </div>
                </div>

                <div class="navbar-item">
                  
                            <strong><?php echo date('d-m-Y ');?>
                            <br>
                              
                            <?php $us=obtenerUsuario($_SESSION["idUsuario"]);
                                          foreach ($us as $u) {
                                            echo "". $u->apellido .", ". $u->nombre ."   turno".$_SESSION["turno"];
                                            # code...
                                          }?>
                            </strong>


                            <form action="logout.php" method="POST">
                            <input type="text" name="msj" id="ejemplo" readonly style="visibility:hidden;">

                            <button class="button is-success"  onclick="salir()">
                               Salir
                             </button>
                            </form>
                            
                            
                             <!-- salir............................ -->
                             <script>
function salir()
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
                            


                            <!-- ................................. -->
                </div>
            </div>
        </div>
    </nav>
    
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">