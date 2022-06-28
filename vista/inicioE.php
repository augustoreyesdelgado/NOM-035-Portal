<?php
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");
include_once("menuE.html");
$object_usuario=new usuario();
$array=$object_usuario->obtener_datos_empresa();
$tr=$array['razonsocial'];
$array2=$object_usuario->contar($tr);
$_SESSION["razonsocial"]=$array['razonsocial']."";
$_SESSION["nivel"]=$array['nivel'];
?>
        
        <section class="contenedor2c">
        <section class="contenedor2b">
        <div>
        <TABLE style="font-family:Helvetica">
        <TR>
		<TD COLSPAN=2>Datos de la Empresa </TD>
	    </TR>
        <TR>
		<TD ALIGN=center ROWSPAN=6 COLSPAN=2><?php echo "<img id='fotoperf' src='".$array['foto']."'>";?><br> <a href="../vista/cambiarfotoE.php"><button id="sit2">Actualizar Foto</button></a>	<a href="../vista/actuliazardatosE.php"><button id="sit2">Actualizar Datos</button></a></TD>
	    </TR>
	    <TR>
		<TD id="sito" style="background-color: rgba(25, 72, 227, 0.47)">Nombre: </TD>
        <TD><?php echo $array['razonsocial'];?></TD>
	    </TR>
	    <TR>
		<TD style="background-color: rgba(25, 72, 227, 0.47)">Direcci&oacute;n: </TD>
        <TD><?php echo $array['domicilio'];?></TD>
	    </TR>
        <TR>
		<TD style="background-color: rgba(25, 72, 227, 0.47)">Telefono: </TD>
        <TD><?php echo $array['telefono'];?></TD>
	    </TR>
        <TR>
        <TD style="background-color: rgba(25, 72, 227, 0.47)">RFC: </TD>
        <TD><?php echo $array['rfc'];?></TD>
	    </TR>
        <TR COLSPAN=4 ROWSPAN=1>
	    </TR>
        </TABLE><br>
        	
        <br>
        <br>
        <TABLE style="font-family:Helvetica; width: 100%">
        <TR>
        <TD style="background-color: Gray">Nivel de Empresa </TD>
        <TD style="background-color: Blue">Trabajadores Registrados </TD>
        <TD style="background-color: #4b806f"><FONT SIZE=2><p>Cuestionario:<br>Acontecimientos Traumáticos </p></FONT> </TD> 
        <?php if($array['nivel']==2) {?>
            <TD style="background-color: #3a6f3a"><FONT SIZE=2><p>Cuestionario:<br>Riesgo Psicosocial </p></FONT></TD> 
        <?php }else if($array['nivel']==3) {?>
            <TD style="background-color: #3a6f3a"><FONT SIZE=2><p>Cuestionario:<br>Riesgo Psicosocial </p></FONT></TD> 
            <TD style="background-color: #52335c"><FONT SIZE=2><p>Cuestionario:<br>Entorno Organizacional </p></FONT> </TD> 
            <?php }?>
	    </TR>
        <TR>
        <TD style="background-color: rgba(128, 128, 128, 0.69)"><center><?php echo $array['nivel'];?></center></TD>
        <TD style="background-color: rgba(0, 0, 255, 0.67)"><center><?php echo $array2[0];?></center></TD>
        <TD style="background-color: #4b806f"><center><?php echo $array2[1];?> Realizados</center></TD>
        <?php if ($array['nivel']==2){?>
        <TD style="background-color: #3a6f3a"><center><?php echo $array2[2];?> Realizados</center></TD>
        <?php }else if ($array['nivel']==3){?>
            <TD style="background-color: #3a6f3a"><center><?php echo $array2[2];?> Realizados</center></TD>
        <TD style="background-color: #52335c"><center><?php echo $array2[3];?> Realizados</center></TD>
        <?php }?>
	    </TR>
        <TR>
        <TD COLSPAN=1></TD>
        <TD><center><a href="../vista/registroTE.php"><button id="boto2">Registrar Trabajador</button></a></center></TD>
        <TD COLSPAN=3><center><a href="../vista/listatrabajadores.php"><button type="submit">Ver Lista</button></a></center></TD>
        </TR>
	    </TABLE>
        <h5>Actividad de la empresa:</h5>
        <p style="font-size:14px;font-family:Helvetica"><?php echo $array['actividadprincipal'];?></p>
        </div> 
        <br>
        <a href="../controlador/logout.php"><button type="submit" >Cerrar sesi&oacute;n</button></a><br>	
		</section>
        <section class="contenedor2b2">
        <br>Gu&iacute;a Rapida (obtenida de: <a href="https://www.gob.mx" target=”blank>https://www.gob.mx</a>)<br>
        <embed src="https://www.gob.mx/cms/uploads/attachment/file/503381/NOM035_guia.pdf" type="application/pdf" width="100%" height="600px">
        </section>
        </section>
<?php 
include_once("Pie.html");
?>