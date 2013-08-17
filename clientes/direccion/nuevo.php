<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Nueva Dirección";
include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
    	<div class="prefix_4 grid_4 suffix_3">
			<fieldset>
				<div class="titulo"><?php echo $titulo;?></div>
                <form action="guardar.php" method="post">
				<table class="tablareg">
					<tr>
						<td><?php campos("Ciudad / Comunidad","ciudad","text","Chulumani",0,array("required"=>"required","size"=>30));?></td>
					</tr>
                    <tr>
						<td><?php campos("Zona / Barrio / Unidad Vecinal","zona","text","",1,array("required"=>"required","size"=>30));?></td>
					</tr>
					<tr>
						<td><?php campos("Calle / Avenida / Camino / Carretera","calle","text","","",array("required"=>"required","size"=>30));?></td>
					</tr>
					<tr><td><?php campos("Guardar Dirección","guardar","submit");?></td><td></td></tr>
				</table>
                </form>
			</fieldset>
		</div>

<?php include_once '../../piepagina.php';?>