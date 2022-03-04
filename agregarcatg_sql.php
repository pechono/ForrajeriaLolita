<?php
if (!isset($_POST["categoria"]) || !isset($_POST["detalles"])) {
    exit("Faltan datos");
}
include_once "funciones.php";
guardarcategoria($_POST["categoria"], $_POST["detalles"]);
header("Location: categoria.php");