<?php 
include_once ("funciones.php");

if (!isset($_SESSION["idUsuario"])) {
 // echo !isset($_SESSION["idUsuario"]);
  exit("Primero debe ingresar al sisteman<br><a href='index.php'>regresar al inicio</a>");
} ?>
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
      width:800px;
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
                            <li><a class="" href="cuentaCorriente.php">Cuenta Corriente</a>
                            <li><a class="" href="">Articulos</a>
                                    
                                        <ul>
                                            <li><a class="" href="productos.php">Agregara Articulo</a></li>
                                            <li> <a class="" href="productosEditar.php">Agregara Modificar</a></li>
                                            <li><a class="" href="productosEliminar.php">Agregara Eliminar</a></li>
                                            <li><a  href="stock.php?stock=0">Inventario</a></li>
                                        <li><a class="" href="stock.php?stock=MpC">Modificar Precio</a></li>
                                        <li><a class="" href="stock.php?stock=MSt">Incrementar Stock</a></li>
                                        </ul> 
                                </li>
                            <li><a href="informes.php">informes</a>
                           </li>
                         
                            
                          </li>
                            
                            <li><a class="" href="">Caja</a>     
                                <ul>       
                                  <li><a href="cierrecaja.php">cierre de caja</a></li>
                                  <li><a href="cierrecaja_Anterio.php">cierre de caja anteriores</a></li>
                                </ul>
                            </li>
                            <li><a class="" href="">Ingresar</a>     
                                <ul> 
                                    <li><a class="" href="">Cliente</a>     
                                        <ul>      
                                          <li><a href="agregar_cliente.php">Agregar cliente</a></li>
                                          <li><a href="modificar_cliente.php">Modicar Cliente</a></li>
                                          <li><a href="eliminar_cliente.php">Eliminar cliente</a></li>
                                       </ul>
                                    </li>
                                    <li><a class="" href="">Proveedor</a>     
                                        <ul>
                                          <li><a href="agregar_proveedor.php">Agregar Proveedor</a></li>
                                          <li><a href="modificar_proveedor.php">Modificar Proveedor</a></li>
                                          <li><a href="eliminar_proveedor.php">Eliminar Proveedor</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="" href="">Categoria</a>     
                                        <ul>
                                        <li><a href="agregar_categoria.php">Ingresar Categoria</a></li>
                                        <li><a href="modificar_categoria.php">Modificiar Categoria</a></li>
                                        <li><a href="eliminar_categoria.php">Eliminar Categoria</a></li>
                                        </ul>
                                     </li>
                                    
                                </ul>
                             </li>

                           <li><a href="pedido.php">pedido</a></li>
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