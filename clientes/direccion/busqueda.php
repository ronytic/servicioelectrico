<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	$narchivo="direccion";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	extract($_POST);
	$datos=${$narchivo}->mostrarTodo("ciudad LIKE '%$ciudad%' and zona LIKE '%$zona%' and calle LIKE '%$calle%'");
	$titulo=array("ciudad"=>"Ciudad","zona"=>"Zona","calle"=>"Calle");
	listadoTabla($titulo,$datos,1,"modificar.php","eliminar.php","ver.php");
}
?>