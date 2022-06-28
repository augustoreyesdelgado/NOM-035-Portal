<?php
include("Header.html");
?><br>

        <center><div class= "cont" style="font-family: helvetica;">
        <cente>Registrar Trabajador</cente>
        <br>
        <br>
        <form id="frm" method="post" action="../controlador/registroTBD.php">
        <table>
        <tr>
        <th style="float:left">
         Empresa:
        </th>
        <th>
        <label><select name="empresa" name="empresa" id="sit4">
                
            <?php
            include("../modelo/conexion.php");
            $consulta="SELECT * FROM empresa";
            $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
                ?>
                
                <?php foreach ($ejecutar as $opciones):?>
                <option value="<?php echo $opciones['razonsocial']?>" autocomplete="on" required><?php echo $opciones['razonsocial']?></option>
                <?php endforeach ?>
            
            </select></label>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         E-mail:
        </th>
        <th>
        <input type="email" id="sit3" name="mail" id="mail" placeholder="ejemplo: abc@correo.com" autocomplete="on"  title="ingrese un correo electronico como el ejemplo: abc@correo.com" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Password:
        </th>
        <th>
        <input type="password" id="sit3" name="password" id="password" placeholder="*****************" minlength="8" maxlength="20" title="El password debe tener entre 8 y 20 caracteres" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Nombre:
        </th>
        <th>
        <input type="text" id="sit3" name="nombre" id="nombre" placeholder="ejemplo: juan" autocomplete="on" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Apellido paterno:
        </th>
        <th>
        <input type="text" id="sit3" name="apellidoP" id="apellidoP" placeholder="ejemplo: perez" autocomplete="on" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Apellido materno:
        </th>
        <th>
        <input type="text" id="sit3" name="apellidoM" id="apellidoM" placeholder="ejemplo: marquez" autocomplete="on" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Sexo:
        </th>
        <th>
        <table>
        <td>Masculino<input type="radio" value="Masculino" name="sexo" id="sexo" required></td>
        <td>Femenino<input type="radio" value="Femenino" name="sexo" id="sexo"></td>
        </table>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Edad:
        </th>
        <th>
        <input type="number" id="edad" name="edad" min="18" max="99" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Estado Civil:
        </th>
        <th>
        <select id="sit4" name="estadocivil" id="estadocivil" autocomplete="on" required>
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
        <select id="sit4" name="niveldeestudios" id="niveldeestudios" autocomplete="on" required>
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
        <input type="text" id="sit3" name="departamento" id="departamento" placeholder="ejemplo: Mercadotecnia" autocomplete="on" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Puesto:
        </th>
        <th>
        <select id="sit4" name="puesto" id="puesto" autocomplete="on" required>
            <option value="Operativo">Operativo</option>
            <option value="Profesional">Profesional</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Gerente">Gerente</option>
        </select>
        </th>
        </tr>    
        <tr>
        <th style="float:left">
         Contrataci&oacute;n:
        </th>
        <th>
        <select id="sit4" name="contratacion" id="contratacion" autocomplete="on" required>
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
        <select id="sit4" name="tipopersonal" id="tipopersonal" autocomplete="on" required>
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
        <select id="sit4" name="tipodejornada" id="tipodejornada" autocomplete="on" required>
            <option value="Nocturno">Fijo nocturno</option>
            <option value="Diurno">Fijo Diurno</option>
            <option value="Mixto">Fijo mixto</option>
        </select>
        </th>
        </tr>
        <tr>
        <th style="float:left">
        Rotaci&oacute;n de turnos:
        </th>
        <th>
        <select id="sit4" name="rotaciondeturnos" id="rotaciondeturnos" autocomplete="on" required>
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
        <input type="number" id="experienciaactual" name="experienciaactual" min="1" max="99" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
        Experiencia laboral:
        </th>
        <th>
        <input type="number" id="experienciatotal" name="experienciatotal" min="1" max="99" required>
        </th>
        </tr>
            
        </table>
            <br>
        <input type="submit" id="sit3" value="Registrarse">
			</form>
		</div>
        <a href="../vista/index.php"><button type="submit">Cancelar</button></a>
        </center><br>
         

<?php
include_once("Pie.html");
?>