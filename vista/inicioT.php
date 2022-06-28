<?php
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]=='1'){
include_once("menuT.html");
$object_usuario=new usuario();
$array=$object_usuario->obtener_datos();
$arrayq1=$object_usuario->evaluar1();
$_SESSION["nombre"]=$array['nombre']."";
$nivel=$object_usuario->consultanivel($array['empresa']);
$_SESSION["nivel"]=$nivel['n'];
 ?>
<section class="contenedor2c">
<section class="contenedor2b">
        <TABLE style="font-family:Helvetica; width: 190%;">
        <TD>
        <TABLE>
        <TR>
		<TD COLSPAN=2>Datos del Trabajador </TD>
	    </TR>
        <TR>
		<TD ALIGN=center ROWSPAN=6 COLSPAN=2><?php echo "<img id='fotoperf' src='".$array['foto']."'>";?><br> <a href="../vista/cambiarfotoT.php"><button id="sit2">Actualizar Foto</button></a><a href="../vista/actualizardatosT.php"><button id="sit2">Actualizar Datos</button></a></TD>
	    </TR>
        </TABLE>
        </TD><TD>
        <TABLE>
	    <TR>
            <TD style="background-color: rgba(25, 72, 227, 0.47)">Correo: </TD><TD style="width: 300px;word-break: break-all;"><?php echo $array['correo'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Nivel de estudios: </TD><TD style="width: 300px;"><?php echo $array['niveldeestudios'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Tipo de jornada: </TD><TD><?php echo $array['tipodejornada'];?></TD>
	    </TR>
	    <TR>
		<TD style="background-color: rgba(25, 72, 227, 0.47)">Nombre completo: </TD><TD><?php echo $array['nombre']." ".$array['apellidoP']." ".$array['apellidoM'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Departamento: </TD><TD><?php echo $array['departamento'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Rotación de turnos: </TD><TD><?php echo $array['rotaciondeturnos'];?></TD>
	    </TR>
        <TR>
		<TD style="background-color: rgba(25, 72, 227, 0.47)">Sexo: </TD><TD><?php echo $array['sexo'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Puesto: </TD><TD><?php echo $array['puesto'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Experiencia actual: </TD><TD><?php echo $array['experienciaactual'];?></TD>
	    </TR>
        <TR>
        <TD style="background-color: rgba(25, 72, 227, 0.47)">Estado civil: </TD><TD><?php echo $array['estadocivil'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Contratación: </TD><TD><?php echo $array['contratacion'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Experiencia total: </TD><TD><?php echo $array['experienciatotal'];?></TD>
	    </TR>
        <TR>
        <TD style="background-color: rgba(25, 72, 227, 0.47)">Edad: </TD><TD><?php echo $array['edad'];?></TD><TD style="background-color: rgba(25, 72, 227, 0.47)">Tipo de personal: </TD><TD style="width: 300px;"><?php echo $array['tipopersonal'];?></TD>
	    </TR>
        </TABLE>
        </TD>
        </TABLE>
		</section>
    <section class="contenedor2b">
        <?php include_once("tabla.php"); ?>
                 
        <h5>Empresa para la que labora:</h5>
        <p style="font-size:14px;font-family:Helvetica"><?php echo $array['empresa'];?> <br>Nivel: <?php echo $nivel['n'];?></p>
        
        <a href="../controlador/logout.php"><button type="submit">Cerrar sesi&oacute;n</button></a>
    </section>
        <section class="contenedor2b2">
        Gu&iacute;a Rapida (obtenida de: <a href="https://www.gob.mx" target=”blank>https://www.gob.mx</a>)<br>
        <embed src="https://www.gob.mx/cms/uploads/attachment/file/503381/NOM035_guia.pdf" type="application/pdf" width="100%" height="700px">
        </section>
        </section>
       <?php
			}else{
		?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
        <?php
            }
		?>
<div></div>
<?php
include_once("Pie.html");
?>