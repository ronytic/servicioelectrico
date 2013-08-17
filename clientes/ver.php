<?php
include_once("../fpdf/fpdf.php");
$narchivo="cliente";
include_once("../class/".$narchivo.".php");
include_once("../class/direccion.php");
include_once("../class/categoria.php");
$direccion=new direccion;
$categoria=new categoria;
${$narchivo}=new $narchivo;
extract($_GET);
$dato=array_shift(${$narchivo}->mostrar($cod));
$dir=array_shift($direccion->mostrar($dato['coddireccion']));
$cat=array_shift($categoria->mostrar($dato['codcategoria']));

$pdf=new FPDF("P","mm","letter");
$pdf->SetFont("arial","B",12);
$pdf->AddPage();
$pdf->Image("../imagenes/logo.png",10,10,30,30);
$pdf->SetXY(50,15);
$pdf->Cell(150,10,"Cooperativa de Servicios Electricos \"CHULUMANI Ltda.\"",0,5,"C");
$pdf->SetFont("arial","UB",12);
$pdf->Cell(150,10,"Datos de Cliente",0,0,"C");
$pdf->Ln(15);
$pdf->Cell(190,0,"",1,10,"C");
$pdf->Ln(5);
mostrarI(array("Nombres"=>$dato['nombres'],
				"Apellido Paterno"=>$dato['paterno'],
				"Apellido Materno"=>$dato['materno'],
				"C.I."=>$dato['ci'],
				"Calle"=>$dir['calle'],
				"Numero de Casa"=>$dato['numerocasa'],
				"Tipo Medidor"=>$dato['tipo'],
				"Categoria"=>$cat['nombre'],
				"Número Medidor"=>$dato['medidor'],
				"Observaciones"=>$dato['observaciones'],
			));

$pdf->Output();
?>