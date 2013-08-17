<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/clientecategoria.php';
	$nombre=$_POST['nombre'];
	$clientecategoria=new clientecategoria;
	$cat=$clientecategoria->mostrarTodo("nombre LIKE '%$nombre%'");
	$titulo=array("nombre"=>"Nombre","detalle"=>"Detalle","monto"=>"Monto Descuento");
	listadoTabla($titulo,$cat,1,"modificar.php","eliminar.php","ver.php");
}
?>