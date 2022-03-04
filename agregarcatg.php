
<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$catg = categoria();
?>

 <form action="agregarcatg_sql.php" method="post">
<table class="var">
	<caption>ingrasar Categoria</caption>
	
   
		<tr>
			<th >id</th>
            <th scope="col" aling="left">id</th>
        </tr>

        <tr>
			<th scope="col">Categoria</th>
            <th scope="col"><input type="text" id="name" name="categoria" required minlength="1" maxlength="8" size="50">
    </th>
        </tr>
        <tr>
			<th scope="col">Detalles</th>

            <th scope="col"><input type="text" id="name" name="detalles" required minlength="1" maxlength="8" size="50">
    </th>
        </tr>
        <tr>
			<th ></th><th ></th><th ></th><th ></th><th ></th><th ></th><th ></th><th ></th>
        </tr>
  
	
</table> 

<button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Agregar
                            </button>

</form>
<?php include_once "pie.php" ?>