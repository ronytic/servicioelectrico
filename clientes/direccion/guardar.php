<?php
include_once("../../login/check.php");
if(!empty($_POST)):
$narchivo="direccion";
include_once("../../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
extract($_POST);

$valores=array("ciudad"=>"'$ciudad'",
			"zona"=>"'$zona'",
			"calle"=>"'$calle'"
			);
${$narchivo}->insertar($valores);
$codinsercion=${$narchivo}->last_id();
$mensaje[]="LA DIRECCION SE GUARDO CORRECTAMENTE";
$titulo="Confirmación de Guardado";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>