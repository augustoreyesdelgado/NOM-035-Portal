<?php
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");
$object_usuario=new usuario();
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==0){
include_once("menuE.html");
$array=$object_usuario->obtener_datosv($_POST["correo"]);
$arrayq1=$object_usuario->evaluar1E($_POST["correo"]);
$_SESSION["nombre"]=$array['nombre']."";
$nivel=$object_usuario->consultanivel($array['empresa']);
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
		<TD ALIGN=center ROWSPAN=7 COLSPAN=2><?php echo "<img id='fotoperf' src='".$array['foto']."'>";?><br>
        <a href="../vista/listatrabajadores.php"><button id="sit3">Volver a lista</button></a><br><form id="frm" method="post" action="../controlador/EmilinaT.php">
        <input id="tte" name="tte" type="hidden" value="<?php echo $array['correo'];?>">
        <input id="alsit3" type="submit" value="Dar de baja del portal">      
        </form>	</TD>
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
        </TABLE><br><br>
    
        <?php include_once("tablaC.php"); ?>
    
		</section>
        
        </section>
        
<div></div>
<?php }else{?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
<?php }
include_once("Pie.html");