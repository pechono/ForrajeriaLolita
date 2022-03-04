<html>
<head>

  <title>titulo</title>
  <style type="text/css">
  * {
    padding:0px;
    margin:0px;
  }
    #header {
      margin:auto;
      width:500px;
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

</head>
<body>
  <div id="header">
    <ul class="nav">
    <li><a href="">inicio</a>
    <li>
        <a href="">stock</a>
        <ul >
           <li><a href="">inicio</a></li>

           <li><a href="">inicio</a></li>
           <li><a href="">inicio</a> 
                    <ul>
                    <li><a href="">inicio</a>  </li>
                    <li><a href="">inicio</a></li>
                    <li><a href="">inicio</a>  
                    <ul>
                                            <li> <a class="navbar-item" href="">Ventas</a>
                                                    <ul>
                                                        <li> <a class="navbar-item" href="informe_VentaDiario.php">Venta Diario</a></li>
                                                        <li><a class="navbar-item" href="informe_VentaMensual">Venta Mensual</a></li>
                                                        <li><a class="navbar-item" href="informe_VentaGeneral">Venta General </a></li>
                                                    </ul>
                                            </li>

                                        </ul>     </li>
                  </ul>
          </li>
        </ul>
      
    
    </li>

    <li><a href="">inicio</a>
    <li><a href="">inicio</a>
    </ul>
  </div>
</body>
</html>