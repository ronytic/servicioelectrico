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
${$narchivo}->actualizar($valores,$cod);
$codinsercion=$cod;
$mensaje[]="LA CATEGORIA DE CLIENTES SE ACTUALIZO CORRECTAMENTE";
$titulo="Confirmación de Actualización";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>