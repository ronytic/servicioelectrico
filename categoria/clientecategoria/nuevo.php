<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Nueva Categoria de Clientes";
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
						<td><?php campos("Nombre","nombre","text","",1,array("required"=>"required","size"=>30));?></td>
					</tr>
                    <tr>
						<td><?php campos("Detalle","detalle","text","","",array("required"=>"required","size"=>30));?></td>
					</tr>
					<tr>
						<td><?php campos("Monto Descuento","monto","text","","",array("required"=>"required","size"=>30));?>Bs</td>
					</tr>
					

					</tr>
					<tr><td><?php campos("Guardar Categoria de Cliente","guardar","submit");?></td><td></td></tr>
				</table>
                </form>
			</fieldset>
		</div>

<?php include_once '../../piepagina.php';?>