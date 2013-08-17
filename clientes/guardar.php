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
${$narchivo}->insertar($valores);
$codinsercion=${$narchivo}->last_id();
$mensaje[]="EL CLIENTE SE GUARDO CORRECTAMENTE";
$titulo="Confirmación de Guardado";
$folder="../";
include_once '../mensajeresultado.php';
endif;?>