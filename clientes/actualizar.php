<?php
include_once("../login/check.php");
if(!empty($_POST)):
$narchivo="cliente";
include_once("../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
extract($_POST);
$valores=array("nombres"=>"'$nombres'",
			"paterno"=>"'$paterno'",
			"materno"=>"'$materno'",
			"ci"=>"'$ci'",
			"coddireccion"=>"'$coddireccion'",
			"numerocasa"=>"'$numerocasa'",
			"tipo"=>"'$tipo'",
			"codcategoria"=>"'$codcategoria'",
			"codclientecategoria"=>"'$codclientecategoria'",
			"medidor"=>"'$medidor'",
			"kwbinicio"=>"'$kwbinicio'",
			"observacion"=>"'$observacion'"
			);
${$narchivo}->actualizar($valores,$cod);
$codinsercion=$cod;
$mensaje[]="EL CLIENTES SE GUARDO CORRECTAMENTE";
$titulo="Confirmación de Guardado";
$folder="../";
include_once '../mensajeresultado.php';
endif;?>