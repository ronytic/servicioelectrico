<?php
include_once '../login/check.php';
$folder="../";
$titulo="Modificar Cliente";
$narchivo="cliente";
include_once("../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
$cod=$_GET['cod'];
$dat=array_shift(${$narchivo}->mostrar($cod));
include_once '../funciones/funciones.php';
include_once '../class/direccion.php';
include_once '../class/categoria.php';
include_once '../class/clientecategoria.php';
$direccion=new direccion;
$categoria=new categoria;
$clientecategoria=new clientecategoria;
$dir=todolista($direccion->mostrarTodo(),"coddireccion","ciudad,zona,calle","-");
$cat=todolista($categoria->mostrarTodo(),"codcategoria","nombre,detalle","-");
$clicat=todolista($clientecategoria->mostrarTodo(),"codclientecategoria","nombre,detalle,monto","-");
include_once '../cabecerahtml.php';
?>
<?php include_once '../cabecera.php';?>
<div class="prefix_3 grid_4 suffix_3">
<fieldset>
    <div class="titulo"><?php echo $titulo;?></div>
    <form action="actualizar.php" method="post">
    <?php campos("","cod","hidden",$cod)?>
    <table class="tablareg">
        <tr>
            <td><?php campos("Nombres","nombres","text",$dat['nombres'],1,array("required"=>"required","size"=>30));?></td>
            <td><?php campos("Apellido Paterno","paterno","text",$dat['paterno'],0,array("required"=>"required","size"=>30));?></td>
        </tr>
        <tr>
            <td><?php campos("Apellido Materno","materno","text",$dat['materno'],0,array("required"=>"required","size"=>30));?></td>
            <td><?php campos("C.I.","ci","text",$dat['ci'],0,array("required"=>"required","size"=>30));?></td>
        </tr>
        <tr>
            <td colspan="2"><?php campos("Calle","coddireccion","select",$dir,0,"",$dat['coddireccion']);?></td>
        </tr>
        <tr>
            <td><?php campos("Numero de Casa / Señal","numerocasa","text",$dat['numerocasa'],0,array("size"=>30));?></td>
            <td><?php campos("Tipo de Medidor","tipo","select",array("110"=>"110","220"=>"220"),0,"",$dat['tipo']);?></td>
        </tr>
        <tr>
            <td colspan="2"><?php campos("Categoria","codcategoria","select",$cat,0,"",$dat['codcategoria']);?></td>
        </tr>
        <tr>
            <td colspan="2"><?php campos("Categoria Cliente, Descuento","codclientecategoria","select",$clicat,0,"",$dat['codclientecategoria']);?><small>Si no quiere otorgar un descuento, dejelo en la opción seleccionar</small></td>
        </tr>
        <tr>
            <td><?php campos("Numero Medidor","medidor","text",$dat['medidor'],0,array("size"=>30));?></td>
            <td><?php campos("Cantidad de KWB Inicial","kwbinicio","text",$dat['kwbinicio'],0,array("size"=>30));?></td>
        </tr>
        <tr>
            <td colspan="2"><?php campos("Observación","observacion","textarea",$dat['observacion'],"",array("rows"=>5,"cols"=>50,"size"=>30));?></td>
        </tr>
        <tr><td><?php campos("Guardar Cliente","guardar","submit");?></td><td></td></tr>
    </table>
    </form>
</fieldset>
</div>

<?php include_once '../piepagina.php';?>