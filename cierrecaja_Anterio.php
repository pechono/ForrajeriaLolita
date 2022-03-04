<?php
include_once "funciones.php";
include_once "encabezado.php";

if(!iseet($_POST["usuario"]) || $_POST["usuario"]==""){

$usuarioPost="cierrecaja.id_usuario like '%'";
}else{
    $usuarioPost="cierrecaja.id_usuario"=.$_POST["usuario"];

}

if(!iseet($_POST["fecha"]) || $_POST["fecha"]==""){

  $fechaPost="cierrecaja.fecha like '%'";
    }else{
        $fechaPost="cierrecaja.fecha".$_POST["fecha"];
    }
    
    if(!iseet($_POST["turno"]) || $_POST["turno"]==""){

        $turnoPost="cierrecaja.turno like '%'";
        }else{
            $turnoPost="cierrecaja.turno".$_POST["usuario"];
        }
        
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
            <option value="">Selecionar Usuario</option>
            <?php 
             $Usuarios=usuario();
            foreach($Usuarios as $User){
                echo "<option value='". $User->id_usuario ."'>". $User->apellido.", ".$User->nombre."</option>";
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