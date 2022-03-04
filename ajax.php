archivo html (calculadora.html):
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
<script src=""></script>
</head>
<style>
   td{
    border:1px solid #FB0707;
   }
</style>
<body>
<!--cuadros de textos-->
Ingresar primer número:<input type="text" id="num1">
Ingresar segundo número:<input type="text" id="num2">
<button onclick="ejecutar_ajax()">Calcular</button>
<!--div donde ajax cargara la información-->
<div id="info"></div>

<!--abrimos nuestro script-->

     <script>
    //función que es llamada cuando se le da click al botón
     function ejecutar_ajax(){
        //obtenemos los valores de losinput por su id.
     var resultado=document.getElementById("info");
     var num1=document.getElementById("num1").value;
     var num2=document.getElementById("num2").value;
     //cadena que sera enviada al php
     var cadena="num1="+num1+"&num2="+num2;
     //Este if sirve para verificar que versión o tipo de navegador estamos utilizando
   
  var xmlhttp;   
  if (window.XMLHttpRequest) {
        
         xmlhttp=new XMLHttpRequest();
     }
     else {
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
     }
  
        //función anonima para verificar si se a cargado correctamente
         xmlhttp.onreadystatechange= function(){
        }
        }
        if (xmlhttp.readyState===4 && xmlhttp.status===200) {
            //utilizamos propiedades de javascript innerHTML para pasarle el resultado obtenido desde php
            resultado.innerHTML=xmlhttp.responseText;
            }
           
        }
    
     }
    //utilizamos el metodo GET enviandole como argumentos la cadena creada al inicio
xmlhttp.open("GET","calculadora.php?"+cadena,true);
xmlhttp.send();
     }  
     </script>
</body>
</html>

(Archivo php calculadora.php)
<?php
//obtenemos los valores enviado desde el metodo GET
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$suma=$num1+$num2;
@$respuesta.="";
//verificamos si son números
if (!ctype_digit($num1) || !ctype_digit($num2)) {
$respuesta.= "Porfavor ingrese 2 numeros";
}
else
{
   
    $respuesta.= "<table>";
    $respuesta.="<tr><td>".$num1."+".$num2."=".($num1+$num2)."</td></tr>";
    $respuesta.="<tr><td>".$num1."-".$num2."=".($num1-$num2)."</td></tr>";
    $respuesta.="<tr><td>".$num1."*".$num2."=".($num1*$num2)."</td></tr>";
    $respuesta.="<tr><td>".$num1."/".$num2."=".($num1/$num2)."</td></tr>";
    $respuesta.="</table>";


}
//esta echo sera lo que veremos en el div  con id info en el archivo .html
echo $respuesta;

?>