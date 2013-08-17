<?php
include_once("../../login/check.php");
$titulo="Listado de Direcciones";
$folder="../../";
include_once("../../funciones/funciones.php");
include_once "../../cabecerahtml.php";
?>
<?php include_once "../../cabecera.php";?>
    	<div class="grid_8 prefix_2 alpha">
        	<fieldset>
        	<div class="titulo"><?php echo $titulo;?> - Criterio de Busqueda</div>
            <form id="busqueda" action="busqueda.php" method="post" >
                <table class="tablabus">
                    <tr>
                        <td><?php campos("Ciudad / Comunidad","ciudad","text","",1,array("size"=>30));?></td>
						<td><?php campos("Zona / Barrio / Unidad Vecinal","zona","text","",1,array("size"=>30));?></td>
                    </tr>
                    <tr>
                        <td><?php campos("Calle / Avenida / Camino / Carretera","calle","text","",1,array("size"=>30));?></td>
                        <td><?php campos("Buscar","enviar","submit","",0,array("size"=>15));?></td>
                    </tr>
                </table>
            </form>
            </fieldset>
        </div>
        <div id="respuesta"></div>
<?php include_once "../../piepagina.php";?>
