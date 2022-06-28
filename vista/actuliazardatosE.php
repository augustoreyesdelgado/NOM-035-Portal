<?php
include_once("../modelo/usuario.php");
include_once("Header.html");
session_start();
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==0){
include_once("menuE.html");
$object_usuario=new usuario();
$array=$object_usuario->obtener_datos_empresa();
?>
        <center><div class= "cont" style="font-family: helvetica;">
        <cente>Sus Datos</cente>
        <br>
        <br>
        <form id="frm" method="post" action="../controlador/actualizarE.php">
        <table>
        <tr>
        <th style="float:left">
         Password:
        </th>
        <th>
        <input type="password" id="sit3" name="password" id="password" placeholder="*****************" minlength="8" maxlength="20" title="El password debe tener entre 8 y 20 caracteres">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         R&aacute;zon Social:
        </th>
        <th>
        <input type="text" id="sit3" name="razonsocial" id="razonsocial" placeholder="ejemplo: Pemex">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         RFC:
        </th>
        <th>
        <input type="text" id="sit3" name="rfc" id="rfc" placeholder="ejemplo: ABC111111DE1" pattern="^([A-ZÑ\x26]{3}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" title="Debe ser el RFC de una persona moral">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Domicilio:
        </th>
        <th>
        <input type="text" id="sit3" name="domicilio" id="domicilio" placeholder="ejemplo: Calle 1 AV 1" autocomplete="on">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Tel&eacute;fono:
        </th>
        <th>
        <input type="text" id="sit3" name="telefono" id="telefono" placeholder="ejemplo: 2710000000" pattern="[0-9]{10}" title="N&uacute;mero de 10 d&iacute;gitos sin espacios">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Actividad:
        </th>
        <th>
        <input type="text" id="sit3" name="actividad" id="actividad" placeholder="ejemplo: Extración de crudo">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Nivel:
        </th>
        <th>
        <select id="sit4" name="nivel" id="nivel">
            <option value=""></option>
            <option value="1">1 a 15 trabajadores</option>
            <option value="2">16 a 50 trabajadores</option>
            <option value="3">51 a 100 trabajadores</option>
        </select>
        </th>
        </tr>
        <tr>
        <TD ROWSPAN=1 COLSPAN=2></TD>
        </tr>
        <tr>
        <TD id="especel" COLSPAN=2><b>**Nota: solo los datos que ingrese cambiarán</b></TD>
        </tr>
        </table>
        <br>
        <input type="submit" id="sit3" value="Actualizar">
			</form>
		</div><a href="../vista/inicioE.php"><button type="submit">Cancelar</button></a>
            <br><br>
<?php }else{?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
<?php }
include_once("Pie.html");
?>