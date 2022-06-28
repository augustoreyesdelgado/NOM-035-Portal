<?php
include("Header.html");
?><br><br><br>

        <center><div class= "cont" style="font-family: helvetica;">
        <cente>Registro de Empresa</cente>
        <br>
        <br>
        <form id="frm" method="post" action="../controlador/registroEBD.php">
        <table>
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
         Razon Social:
        </th>
        <th>
        <input type="text" id="sit3" name="razonsocial" id="razonsocial" placeholder="ejemplo: Pemex" autocomplete="on" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         RFC:
        </th>
        <th>
        <input type="text" id="sit3" name="rfc" id="rfc" placeholder="ejemplo: ABC111111DE1" pattern="^([A-ZÑ\x26]{3}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" title="Debe ser el RFC de una persona moral" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Domicilio:
        </th>
        <th>
        <input type="text" id="sit3" name="domicilio" id="domicilio" placeholder="ejemplo: Calle 1 AV 1" autocomplete="on" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Tel&eacute;fono:
        </th>
        <th>
        <input type="text" id="sit3" name="telefono" id="telefono" placeholder="ejemplo: 2710000000" pattern="[0-9]{10}" title="N&uacute;mero de 10 d&iacute;gitos sin espacios" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Actividad:
        </th>
        <th>
        <input type="text" id="sit3" name="actividad" id="actividad" placeholder="ejemplo: Extración de crudo" autocomplete="on" required>
        </th>
        </tr>
        <tr>
        <th style="float:left">
         Nivel:
        </th>
        <th>
        <select id="sit4" name="nivel" id="nivel" autocomplete="on" required>
            <option value="1">1 a 15 trabajadores</option>
            <option value="2">16 a 50 trabajadores</option>
            <option value="3">51 a 100 trabajadores</option>
        </select>
        </th>
        </tr>
        
        </table>
        <br>
        <input type="submit" id="sit3" value="Registrarse">
			</form>
		</div><a href="../vista/index.php"><button type="submit">Cancelar</button></a>
</center><br>

<?php
include_once("Pie.html");
?>
