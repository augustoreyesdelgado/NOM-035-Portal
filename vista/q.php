<?php

include_once("..\modelo\usuario.php");
include_once("Header.html");
session_start();
$object_usuario=new usuario();
?>

<body>
    <input type="radio" name="q" onchange="friends()">
    <input type="radio" name="q" onchange="elimiar()">
     <div id ="right" >
     </div>
  </body>

<script>
    function friends(){
     document.getElementById("right").innerHTML = '<table id="especel2"><tr><th>Comunican tarde los asuntos de trabajo</th><th><table><tr><td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta69" id="pregunta69" width="1%" required></td>            <td><input type="radio" value="3" name="pregunta69" id="pregunta69" width="1%"></td>             <td><input type="radio" value="2" name="pregunta69" id="pregunta69" width="1%"></td>             <td><input type="radio" value="1" name="pregunta69" id="pregunta69" width="1%"></td>             <td><input type="radio" value="0" name="pregunta69" id="pregunta69" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>         Dificultan el logro de los resultados del trabajo         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta70" id="pregunta70" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="2" name="pregunta70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="1" name="pregunta70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="0" name="pregunta70" id="pregunta70" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>        Cooperan poco cuando se necesita         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta71" id="pregunta71" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta71" id="pregunta71" width="1%"></td>             <td><input type="radio" value="2" name="pregunta71" id="pregunta71" width="1%"></td>             <td><input type="radio" value="1" name="pregunta71" id="pregunta71" width="1%"></td><td><input type="radio" value="0" name="pregunta71" id="pregunta71" width="1%"></td></tr></table></th></tr>             <tr><th>Ignoran las sugerencias para mejorar su trabajo</th><th><table><tr><td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td></tr><tr><td><input type="radio" value="4" name="pregunta72" id="pregunta72" width="1%" required></td><td><input type="radio" value="3" name="pregunta72" id="pregunta72" width="1%"></td><td><input type="radio" value="2" name="pregunta72" id="pregunta72" width="1%"></td><td><input type="radio" value="1" name="pregunta72" id="pregunta72" width="1%"></td><td><input type="radio" value="0" name="pregunta72" id="pregunta72" width="1%"></td></tr></table></th></tr></table>';
     }
    function elimiar() {
    document.getElementById("right").innerHTML = '';	
    }
</script>