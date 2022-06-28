<?php
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==1){
include_once("menuT.html");
$object_usuario=new usuario();
$array=$object_usuario->obtener_datos();
$arrayq1=$object_usuario->evaluar1();
$_SESSION["nombre"]=$array['nombre']."";
 ?>
<section class="contenedor2c">
    <br><br>
    <center>
    <TABLE style="font-family:Helvetica";>
        <TR>
		<TD style=" width:800px">Acontecimientos traumáticos severos</TD>
        <TD style=" width:100px"></TD>
        <TD ROWSPAN=2> <a href="../vista/ATSI.php"><button type="submit">Iniciar Cuestionario</button></a></TD>
	    </TR>
        <TR>
		<TD style=" width:800px">Cuestionario que permite identificar a los trabajadores que han sido sujetos a acontecimientos traumáticos severos y que requieren valoración clínica.</TD>
	    </TR>
    </TABLE>
    <br><br>
    <?php if($_SESSION["nivel"]==3) { ?>
    <TABLE style="font-family:Helvetica";>
        <TR>
		<TD style=" width:800px">Entorno organizacional </TD>
        <TD style=" width:100px"></TD>
        <TD ROWSPAN=2> <a href="../vista/FREOa.php"><button type="submit">Iniciar Cuestionario</button></a></TD>
	    </TR>
        <TR>
		<TD style=" width:800px">Cuestionario para identificar los factores de riesgo psicosocial y evaluar el entorno organizacional en los centros de trabajo </TD>
	    </TR>
    </TABLE>
    <br><br>
    <TABLE style="font-family:Helvetica";>
        <TR>
		<TD style=" width:800px">Factores de riesgo psicosocial</TD>
        <TD style=" width:100px"></TD>
        <TD ROWSPAN=2> <a href="../vista/FRPa.php"><button type="submit">Iniciar Cuestionario</button></a></TD>
	    </TR>
        <TR>
		<TD style=" width:800px">Cuestionario para la identificación y análisis de los factores de riesgo psicosocial en los centros de trabajo</TD>
	    </TR>
    </TABLE>
    <br><br>
    <?php }else if($_SESSION["nivel"]==2){ ?>   
    <TABLE style="font-family:Helvetica";>
        <TR>
		<TD style=" width:800px">Factores de riesgo psicosocial</TD>
        <TD style=" width:100px"></TD>
        <TD ROWSPAN=2> <a href="../vista/FRPa.php"><button type="submit">Iniciar Cuestionario</button></a></TD>
	    </TR>
        <TR>
		<TD style=" width:800px">Cuestionario para la identificación y análisis de los factores de riesgo psicosocial en los centros de trabajo</TD>
	    </TR>
    </TABLE>
    <br><br>
    <?php } ?>
    <a href="../vista/inicioT.php"><button type="submit">Cancelar</button></a>
    </center>
    
        </section>
<?php }else{?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
<?php }
include_once("Pie.html");
?>