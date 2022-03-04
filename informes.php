<?php include_once "funciones.php";
include_once "encabezado.php";


?>

<div class="table">
   <table>
        <tr>
            <th align="center" colspan=2>informes de Ventas</th>
        </tr>    
        <tr>
            <th rowspan="3" align="right"><a href="informe_Venta.php?inf=inf" target="_blank" rel="noopener noreferrer">Ventas</a> </th>
            <td><a href="informe_Venta.php?inf=D" target="_blank" rel="noopener noreferrer">Venta Diaria</a></td>
            
        </tr>
        <tr>
            <td><a href="informe_Venta.php?inf=Ms" target="_blank" rel="noopener noreferrer">Venta Mensuale</a></td>
            
        </tr>
        <tr>
            <td><a href="informe_Venta.php?inf=Gnr" target="_blank" rel="noopener noreferrer">Venta General</a></td>
        </tr>
       
    </table> 
</div>

<div class="table">
   <table>
        <tr>
            <th align="center" colspan=2>informes  Venta de  Articulos</th>
        </tr>    
        <tr>
            <th rowspan="3" align="right"><a href="informe_ArtVenta.php?inf=inf" target="_blank" rel="noopener noreferrer">Ventas por Articulo</a> </th>
            <td><a href="informe_ArtVenta.php?inf=D" target="_blank" rel="noopener noreferrer">Venta Diaria por Articulo</a></td>
            
        </tr>
        <tr>
            <td><a href="informe_ArtVenta.php?inf=Ms" target="_blank" rel="noopener noreferrer">Venta Mensual por Articulo</a></td>
            
        </tr>
        <tr>
            <td><a href="informe_ArtVenta.php?inf=Gnr" target="_blank" rel="noopener noreferrer">Venta General de Articulo</a></td>
        </tr>
       
        
    </table> 
</div>

<div class="table">
   <table>
        <tr>
            <th align="center" colspan=2>informes Venta Por Cliente</th>
        </tr>    
        <tr>
            <th rowspan="3" align="right"><a href="informe_ArtVentaCliente.php?inf=inf" target="_blank" rel="noopener noreferrer">Ventas por Articulo</a> </th>
            <td><a href="informe_ArtVentaCliente.php?inf=D" target="_blank" rel="noopener noreferrer">Venta de Articulo Por Cliente</a></td>
            
        </tr>
        <tr>
            <td><a href="informe_ArtVentaCliente.php?inf=Ms" target="_blank" rel="noopener noreferrer">Venta Mensual por Articulo</a></td>
            
        </tr>
        <tr>
            <td><a href="informe_ArtVentaCliente.php?inf=Gnr" target="_blank" rel="noopener noreferrer">Venta General de Articulo</a></td>
        </tr>
       
        
    </table> 
</div>


<?php include_once"pie.php";