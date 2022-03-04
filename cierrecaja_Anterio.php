<?php
include_once "funciones.php";
include_once "encabezado.php";
?>

<div class="container">
    <form action="cierrecaja_Anterio.php" metohod="post">
<table class="table">
    <tr>
        <td colspan=3>Cierres de caja</tr>
    <tr>
        <td>Fecha</td><td>Usuario</td><td>Turno</td>
    </tr>
    <tr>
        <td><input type="date" name="fecha"></td>
        <td><select name="usuario">
            <?php 
             $Usuarios=usuario();
            foreach($Usuarios as $User){
                echo "<option value='". $User->id_usuario .">". $User->apellido.", ".$User->nombre."</option>";
            }?>

        </select></td>
        <td>
            <select name="turno">
                <option value="">Todo</option>
                <option value="1">Mañana</option>
                <option value="2">Tarde</option>
            </select>
        </td>
        <td>
        <button class="button is-success">buscra</button>
        </td>
    </tr>
</table>
</form>
</div>



<?php
include_once "pie.php";
?>