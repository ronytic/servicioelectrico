<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Modificar Categoria de Clientes";
$narchivo="clientecategoria";
include_once("../../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
$cod=$_GET['cod'];
$cat=array_shift(${$narchivo}->mostrar($cod));
include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
    	<div class="prefix_4 grid_4 suffix_3">
			<fieldset>
				<div class="titulo"><?php echo $titulo;?></div>
                <form action="actualizar.php" method="post">
                <?php campos("","cod","hidden",$cod)?>
				<table class="tablareg">
					<tr>
						<td><?php campos("Nombre","nombre","text",$cat['nombre'],1,array("required"=>"required","size"=>30));?></td>
					</tr>
                    <tr>
						<td><?php campos("Detalle","detalle","text",$cat['detalle'],"",array("required"=>"required","size"=>30));?></td>
					</tr>
					<tr>
						<td><?php campos("Monto Descuento","monto","text",$cat['monto'],"",array("required"=>"required","size"=>30));?>Bs</td>
					</tr>
					<tr><td><?php campos("Guardar Categoria de Clientes","guardar","submit");?></td><td></td></tr>
				</table>
                </form>
			</fieldset>
		</div>

<?php include_once '../../piepagina.php';?>