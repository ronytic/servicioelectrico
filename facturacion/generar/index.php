<?php
include_once("../../login/check.php");
$titulo="Generar Planillas de Facturación";
$folder="../../";
include_once("../../funciones/funciones.php");
include_once '../../class/direccion.php';
include_once '../../class/categoria.php';
$direccion=new direccion;
$categoria=new categoria;
$dir=todolista($direccion->mostrarTodo(),"coddireccion","ciudad,zona,calle","-");
$cat=todolista($categoria->mostrarTodo(),"codcategoria","nombre,detalle","-");
include_once "../../cabecerahtml.php";
?>
<script language="javascript" type="text/javascript" src="../../js/facturacion/generar.js"></script>
<?php include_once "../../cabecera.php";?>
    	<div class="grid_9 prefix_1">
        	<fieldset>
        	<div class="titulo"><?php echo $titulo;?> - Criterio de Busqueda</div>
            <form id="busqueda" action="busqueda.php" method="post" >
                <table class="tablabus">
                    <tr>
                        <td colspan="2"><?php campos("Meses","mes","select",meses(),"","",date("m")-1);?></td>
                        <td colspan="2"><?php campos("Año","anio","select",anio(),"","",date("Y"));?></td>
                    </tr>
                    <tr>
                        <td><?php campos("Buscar","enviar","submit","");?></td>
                    </tr>
                </table>
            </form>
            </fieldset>
        <div id="respuesta"></div>
    </div>
    
<?php include_once "../../piepagina.php";?>
