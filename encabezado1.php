
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras con PHP y MySQL - By Parzibyte</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
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



</style>
<body>

    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="">
                <img alt="" src="abuela.png" style="max-height: 100px" /> <i><h1><b>Polirubro Lolita</b></h1></i>
            </a>
            <button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                
                <a class="navbar-item" href="tienda.php?x=0">
                <a class="navbar-item" href="productos.php">Productos</a>
                <a class="navbar-item" href="categoria.php">Categoria</a>
                <a class="navbar-item" href="stock.php?stock=0">Inventario</a>
                <a class="navbar-item" href="stock.php?stock=MpC">Modificar Precio</a>
                <a class="navbar-item" href="stock.php?stock=MSt">Incrementar Stock</a>


            </div>


            <nav id="mainnav" role="navigation">
      
    </nav>
            <div class="navbar-end">

                







                <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="button is-success">
                            <strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        <a target="_blank" rel="noreferrer" href="https://parzibyte.me/l/fW8zGd" class="button is-primary">
                            <strong>Soporte y ayuda</strong>
                        </a>
                    </div>
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