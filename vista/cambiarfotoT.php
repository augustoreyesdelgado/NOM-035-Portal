<?php
/*Este archivo presenta la pagina en la cual el usuario podra cambiar su foto*/
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==1){
include_once("menuT.html");
$object_usuario=new usuario();
$array=$object_usuario->obtener_datos();
?><br><br><br>
<section class="contenedor2f">
    <center><h1>Cambiar Foto</h1></center>
<br><br>
        
    <TABLE>
	     <TR>
		 <TD ALIGN=center ROWSPAN=5 COLSPAN=2><?php echo "<img id='fotoperf' src='".$array['foto']."'>";?></TD>
		 <TD>Nueva Foto: </TD>
         <TD><form  method="POST" action="../controlador/cambiarfotoT.php" enctype="multipart/form-data"><input type="file" name="file1" id="file1">
                   <input type="submit" value="aceptar">
                   </form></TD>
	     </TR>
        </TABLE>
    <a href="../vista/inicioT.php"><button>Cancelar</button></a>
    <br>
</section>
<br><br><br>
<?php }else{?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
<?php }
include_once("Pie.html");
?>