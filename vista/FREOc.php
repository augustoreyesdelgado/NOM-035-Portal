<?php
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");
$object_usuario=new usuario();
?>
<style>
th{
  border: 1px solid black;  
}
table{
    border-collapse: collapse;
}
</style>
<body>
<form id="frm" method="post" action="../controlador/FREOc.php">
    
     <center><div class="contt">
        <br>
         <center><b>Evaluaci&oacute;n de <?php echo $_SESSION["nombre"]; ?></b></center>
         <br>
         <table id="especel2">
         <tr>
         <th>
         Comunican tarde los asuntos de trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p69" id="pregunta69" width="1%" required></td>
             <td><input type="radio" value="3" name="p69" id="pregunta69" width="1%"></td>
             <td><input type="radio" value="2" name="p69" id="pregunta69" width="1%"></td>
             <td><input type="radio" value="1" name="p69" id="pregunta69" width="1%"></td>
             <td><input type="radio" value="0" name="p69" id="pregunta69" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th>
         Dificultan el logro de los resultados del trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p70" id="pregunta70" width="1%" required></td>
             <td><input type="radio" value="3" name="p70" id="pregunta70" width="1%"></td>
             <td><input type="radio" value="2" name="p70" id="pregunta70" width="1%"></td>
             <td><input type="radio" value="1" name="p70" id="pregunta70" width="1%"></td>
             <td><input type="radio" value="0" name="p70" id="pregunta70" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th>
        Cooperan poco cuando se necesita
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p71" id="pregunta71" width="1%" required></td>
             <td><input type="radio" value="3" name="p71" id="pregunta71" width="1%"></td>
             <td><input type="radio" value="2" name="p71" id="pregunta71" width="1%"></td>
             <td><input type="radio" value="1" name="p71" id="pregunta71" width="1%"></td>
             <td><input type="radio" value="0" name="p71" id="pregunta71" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         <tr>
         <th>
         Ignoran las sugerencias para mejorar su trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p72" id="pregunta72" width="1%" required></td>
             <td><input type="radio" value="3" name="p72" id="pregunta72" width="1%"></td>
             <td><input type="radio" value="2" name="p72" id="pregunta72" width="1%"></td>
             <td><input type="radio" value="1" name="p72" id="pregunta72" width="1%"></td>
             <td><input type="radio" value="0" name="p72" id="pregunta72" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         </table>
         
         
         <br>
         <br>
        <br>
     </div>
    <button type="submit">Terminar</button> 
    </center>
    <br>
</form>
        <center><a href="../vista/seleccionc.php"><button>Cancelar</button></a></center><br>
    
</body>

<?php
include_once("Pie.html");
?>