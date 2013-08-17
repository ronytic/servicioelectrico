<?php
include_once("../../login/check.php");
if(!empty($_POST)):
$narchivo="clientecategoria";
include_once("../../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
extract($_POST);

$valores=array("nombre"=>"'$nombre'",
			"detalle"=>"'$detalle'",
			"monto"=>"'$monto'"
			);
${$narchivo}->insertar($valores);
$codinsercion=${$narchivo}->last_id();
$mensaje[]="LA CATEGORIA DE CLIENTES SE GUARDO CORRECTAMENTE";
$titulo="Confirmación de Guardado";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>