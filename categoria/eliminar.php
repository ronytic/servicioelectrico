<?php  
include_once("../login/check.php");
if (!empty($_GET)) {
	$nombre="categoria";
	include_once '../class/'.$nombre.'.php';
	${$nombre}=new $nombre;
	$id=$_GET['cod'];
	${$nombre}->eliminar($id);
}
?>