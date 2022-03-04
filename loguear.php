<?php
include_once"funciones.php";

if (!isset($_POST["usuario"]) && !isset($_POST["pass"]) && iseet(["turno"])) {
    exit("usuario o clave no registarda correctamente");
} else {
  $user=$_POST["usuario"];
  $pass=$_POST["pass"];
  $turno=$_POST["turno"];
$usuarios=usuario();
foreach ($usuarios as $u) {
   
    if ($u->usuario==$user && $u->clave==$pass ) {
        
$_SESSION["turno"]=$turno; 
$_SESSION["idUsuario"]=$u->id_usuario;
        


        header("Location: tienda.php?x=0");
    }else{

    echo "    no esta registrado como usuario";# code...
}
}

}




?>