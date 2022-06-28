<?php
/*Este archivo sirve para que el usuario empresa pueda tener una vista detallada de los datos de un trabajador seleccionado*/
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");

$object_usuario=new usuario();
$array=$object_usuario->obtener_datosv($_POST["correo"]);
$arrayq1=$object_usuario->evaluar1E($_POST['correo']);
 ?>

        <section class="contenedor2b">
        <div>
        <TABLE style="font-family:Helvetica">
        <TR>
		<TD COLSPAN=2>Datos del Trabajador </TD>
	    </TR>
        <TR>
		<TD ALIGN=center ROWSPAN=7 COLSPAN=2><?php echo "<img id='fotoperf' src='".$array['foto']."'>";?></TD>
	    </TR>
	    <TR>
		<TD>Nombre: </TD>
        <TD><?php echo $array['nombre']." ".$array['apellidoP']." ".$array['apellidoM'];?></TD>
	    </TR>
	    <TR>
		<TD>Edad: </TD>
        <TD><?php echo $array['edad'];?></TD>
	    </TR>
        <TR>
		<TD>Nivel de Estudios: </TD>
        <TD><?php echo $array['niveldeestudios'];?></TD>
	    </TR>
        <TR>
        <TD>Departamento: </TD>
        <TD><?php echo $array['departamento'];?></TD>
	    </TR>
        <TR>
        <TD>Puesto: </TD>
        <TD><?php echo $array['puesto'];?></TD>
	    </TR>
        <TR>
        <TD>Expreriencia en el puesto actual: </TD>
        <TD><?php echo $array['experienciaactual']." a&ntilde;os";?></TD>
	    </TR>
        <TR COLSPAN=4 ROWSPAN=1>
	    </TR>
        </TABLE><br>
        <TABLE style="font-family:Helvetica">
        <TR>
        <TD style="background-color: Gray">Resultado del Test 1</TD>
        <TD style="background-color: Blue">Resultado del Test 2</TD>
        <TD style="background-color: Green">Resultado del Test 3 </TD>
	    </TR>
        <TR>
        <?php
			if (isset($arrayq1['r']) && $arrayq1['r']<7){
		?>
        <TD style="background-color: rgba(0, 255, 0, 0.85)"><center>Aprobado</center></TD>
        <?php
			}else{
		?>
        <TD style="background-color: rgba(80, 80, 142, 0.67)"><center>Sin Aprobar</center></TD>
        <?php
            }
		?>
        <?php
			if (isset($arrayq1['r']) && $arrayq1['r']<7){
		?>
        <TD style="background-color: rgba(0, 255, 0, 0.85)"><center>Aprobado</center></TD>
        <?php
			}else{
		?>
        <TD style="background-color: rgba(80, 80, 142, 0.67)"><center>Sin Aprobar</center></TD>
        <?php
            }
		?>
        <?php
			if (isset($arrayq1['r']) && $arrayq1['r']<7){
		?>
        <TD style="background-color: rgba(0, 255, 0, 0.85)"><center>Aprobado</center></TD>
        <?php
			}else{
		?>
        <TD style="background-color: rgba(80, 80, 142, 0.67)"><center>Sin Aprobar</center></TD>
        <?php
            }
		?>
	    </TR>
	    </TABLE>
        <h5>Empresa para la que labora:</h5>
        <p style="font-size:14px;font-family:Helvetica"><?php echo $array['empresa'];?></p>
        </div> 
		</section>
<div></div>
<?php
include_once("Pie.html");
?>