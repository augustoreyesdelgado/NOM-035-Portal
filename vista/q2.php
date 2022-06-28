<?php

include_once("..\modelo\usuario.php");
include_once("Header.html");
session_start();
$object_usuario=new usuario();
?>

<body>
         <table id="especel2">
         <tr>
         <th align="left">En mi trabajo debo brindar servicio a clientes o usuarios:</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" name="q1" onchange="agregar()" required></td>
             <td><input type="radio" name="q1" onchange="eliminar()"></td>
         </tr>
         </table>
         </th>
         </tr>
         </table><br>
    
         <div id ="extra1" >
         </div><br>
    
         <table id="especel2">
         <tr>
         <th align="left">
         Soy jefe de otros trabajadores:</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" name="q2" onchange="agregar2()" required></td>
             <td><input type="radio" name="q2" onchange="eliminar2()"></td>
         </tr>
         </table>
         </th>
         </tr>
         </table><br>
    
         <div id ="extra2" >
         </div><br>
    
  </body>

<script>
    function agregar(){
     document.getElementById("extra1").innerHTML = '<table id="especel2">         <tr>         <th>        Atiendo clientes o usuarios muy enojados         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta65" id="pregunta65" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta65" id="pregunta65" width="1%"></td>             <td><input type="radio" value="2" name="pregunta65" id="pregunta65" width="1%"></td>             <td><input type="radio" value="1" name="pregunta65" id="pregunta65" width="1%"></td>             <td><input type="radio" value="0" name="pregunta65" id="pregunta65" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>         Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta66" id="pregunta66" width="1%" required></td>            <td><input type="radio" value="3" name="pregunta66" id="pregunta66" width="1%"></td>            <td><input type="radio" value="2" name="pregunta66" id="pregunta66" width="1%"></td>             <td><input type="radio" value="1" name="pregunta66" id="pregunta66" width="1%"></td>             <td><input type="radio" value="0" name="pregunta66" id="pregunta66" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>         Para hacer mi trabajo debo demostrar sentimientos distintos a los míos         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta67" id="pregunta67" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta67" id="pregunta67" width="1%"></td>             <td><input type="radio" value="2" name="pregunta67" id="pregunta67" width="1%"></td>             <td><input type="radio" value="1" name="pregunta67" id="pregunta67" width="1%"></td>             <td><input type="radio" value="0" name="pregunta67" id="pregunta67" width="1%"></td>         </tr>         </table>         </th>         </tr>                     <tr>         <th>        Mi trabajo me exige atender situaciones de violencia         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta68" id="pregunta68" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta68" id="pregunta68" width="1%"></td>             <td><input type="radio" value="2" name="pregunta68" id="pregunta68" width="1%"></td>             <td><input type="radio" value="1" name="pregunta68" id="pregunta68" width="1%"></td>             <td><input type="radio" value="0" name="pregunta68" id="pregunta68" width="1%"></td>         </tr>         </table>         </th>         </tr>                      </table>';
     }
    function eliminar() {
    document.getElementById("extra2").innerHTML = '';	
    }
    function agregar2(){
     document.getElementById("extra2").innerHTML = '<table id="especel2">         <tr>         <th>         Comunican tarde los asuntos de trabajo         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta69" id="pregunta69" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta69" id="pregunta69" width="1%"></td>            <td><input type="radio" value="2" name="pregunta69" id="pregunta69" width="1%"></td>             <td><input type="radio" value="1" name="pregunta69" id="pregunta69" width="1%"></td>             <td><input type="radio" value="0" name="pregunta69" id="pregunta69" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>         Dificultan el logro de los resultados del trabajo         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta70" id="pregunta70" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="2" name="pregunta70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="1" name="pregunta70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="0" name="pregunta70" id="pregunta70" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>        Cooperan poco cuando se necesita         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta71" id="pregunta71" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta71" id="pregunta71" width="1%"></td>             <td><input type="radio" value="2" name="pregunta71" id="pregunta71" width="1%"></td>             <td><input type="radio" value="1" name="pregunta71" id="pregunta71" width="1%"></td>             <td><input type="radio" value="0" name="pregunta71" id="pregunta71" width="1%"></td>         </tr>         </table>         </th>         </tr>                      <tr>         <th>         Ignoran las sugerencias para mejorar su trabajo         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="pregunta72" id="pregunta72" width="1%" required></td>             <td><input type="radio" value="3" name="pregunta72" id="pregunta72" width="1%"></td>             <td><input type="radio" value="2" name="pregunta72" id="pregunta72" width="1%"></td>             <td><input type="radio" value="1" name="pregunta72" id="pregunta72" width="1%"></td>             <td><input type="radio" value="0" name="pregunta72" id="pregunta72" width="1%"></td>         </tr>         </table>         </th>        </tr>                    </table>';
     }
    function eliminar2() {
    document.getElementById("extra2").innerHTML = '';	
    }
</script>