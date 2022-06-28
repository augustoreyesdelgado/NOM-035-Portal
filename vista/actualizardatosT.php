<?php
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==1){
include_once("menuT.html");
$object_usuario=new usuario();
$array=$object_usuario->obtener_datos();
?>
        <center><div class= "cont" style="font-family: helvetica;">
        <cente>Sus Datos</cente>
        <br>
        <br>
        <form id="frm" method="post" action="../controlador/actualizarT.php">
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
         Nombre:
        </th>
        <th>
        <input type="text" id="sit3" name="nombre" id="nombre" placeholder="ejemplo: juan" autocomplete="on">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Apellido paterno:
        </th>
        <th>
        <input type="text" id="sit3" name="apellidoP" id="apellidoP" placeholder="ejemplo: perez" autocomplete="on">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Apellido materno:
        </th>
        <th>
        <input type="text" id="sit3" name="apellidoM" id="apellidoM" placeholder="ejemplo: marquez" autocomplete="on">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Sexo:
        </th>
        <th>
        <table>
        <td>Masculino<input type="radio" value="Masculino" name="sexo" id="sexo"></td>
        <td>Femenino<input type="radio" value="Femenino" name="sexo" id="sexo"></td>
        </table>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Edad:
        </th>
        <th>
        <input type="number" id="edad" name="edad" min="18" max="99">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Estado Civil:
        </th>
        <th>
        <select id="sit4" name="estadocivil" id="estadocivil" autocomplete="on">
            <option value=""></option>
            <option value="Soltero">Soltero(a)</option>
            <option value="Casado">Casado(a)</option>
            <option value="Divorciado">Divorciado(a)</option>
            <option value="Viudo">Viudo(a)</option>
            <option value="Union libre">Unión libre</option>
        </select>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Nivel De Estudios:
        </th>
        <th>
        <select id="sit4" name="niveldeestudios" id="niveldeestudios">
            <option value=""></option>
            <option value="Sin fornacion">Sin fornacion</option>
            <option value="Primaria">Primaria</option>
            <option value="Secundaria">Secundaria</option>
            <option value="Preparatoria">Preparatoria</option>
            <option value="Tecnico superior">Tecnico superior</option>
            <option value="Licenciatura">Licenciatura</option>
            <option value="Maestria">Maestria</option>
            <option value="Doctorado">Doctorado</option>
        </select>
        </th>
        </tr>
            
        <tr>
        <th style="float:left">
         Departamento:
        </th>
        <th>
        <input type="text" id="sit3" name="departamento" id="departamento" placeholder="ejemplo: Mercadotecnia" autocomplete="on">
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Puesto:
        </th>
        <th>
        <select id="sit4" name="puesto" id="puesto" autocomplete="on">
            <option value=""></option>
            <option value="Operativo">Operativo</option>
            <option value="Profesional">Profesional</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Gerente">Gerente</option>
        </select>
        </th>
        </tr>    
        <tr>
        <th style="float:left">
         Contratacion:
        </th>
        <th>
        <select id="sit4" name="contratacion" id="contratacion" autocomplete="on">
            <option value=""></option>
            <option value="Por obra o proyecyo">Por obra o proyecyo</option>
            <option value="Por tiempo determinado">Por tiempo determinado</option>
            <option value="Tiempo indeterminado">Tiempo indeterminado</option>
            <option value="Honorarios">Honorarios</option>
        </select>
        </th>
        </tr> 
        <tr>
        <th style="float:left">
         Tipo de personal:
        </th>
        <th>
        <select id="sit4" name="tipopersonal" id="tipopersonal" autocomplete="on">
            <option value=""></option>
            <option value="Sindicalizado">Sindicalizado</option>
            <option value="Confianza">Confianza</option>
            <option value="Ninguno">Ninguno</option>
        </select>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Tipo de jornada:
        </th>
        <th>
        <select id="sit4" name="tipodejornada" id="tipodejornada" autocomplete="on">
            <option value=""></option>
            <option value="Nocturno">Fijo Nocturno</option>
            <option value="Diurno">Fijo Diurno</option>
            <option value="Mixto">Fijo Mixto</option>
        </select>
        </th>
        </tr>
        <tr>
        <th style="float:left">
        Rotacion de turnos:
        </th>
        <th>
        <select id="sit4" name="rotaciondeturnos" id="rotaciondeturnos" autocomplete="on">
            <option value=""></option>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        </th>
        </tr>
        <tr>
        <th style="float:left">
        Expe. puesto actual:
        </th>
        <th>
        <input type="number" id="experienciaactual" name="experienciaactual" min="1" max="99">
        </th>
        </tr>
        <tr>
        <th style="float:left">
        Experiencia laboral:
        </th>
        <th>
        <input type="number" id="experienciatotal" name="experienciatotal" min="1" max="99">
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
		</div><a href="../vista/inicioT.php"><button type="submit">Cancelar</button></a>
            <br><br>
<?php }else{?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
<?php }
include_once("Pie.html");
?>