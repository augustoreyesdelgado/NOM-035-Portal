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
<form id="frm" method="post" action="../controlador/FREb.php">
    
     <center><div class="contt">
        <br>
         <center><b>Evaluaci&oacute;n de <?php echo $_SESSION["nombre"]; ?></b></center>
         <br>
         <table id="especel2">
         <tr>
         <th>
        Atiendo clientes o usuarios muy enojados
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p65" id="pregunta65" width="1%" required></td>
             <td><input type="radio" value="3" name="p65" id="pregunta65" width="1%"></td>
             <td><input type="radio" value="2" name="p65" id="pregunta65" width="1%"></td>
             <td><input type="radio" value="1" name="p65" id="pregunta65" width="1%"></td>
             <td><input type="radio" value="0" name="p65" id="pregunta65" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th>
         Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p66" id="pregunta66" width="1%" required></td>
             <td><input type="radio" value="3" name="p66" id="pregunta66" width="1%"></td>
             <td><input type="radio" value="2" name="p66" id="pregunta66" width="1%"></td>
             <td><input type="radio" value="1" name="p66" id="pregunta66" width="1%"></td>
             <td><input type="radio" value="0" name="p66" id="pregunta66" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th>
         Para hacer mi trabajo debo demostrar sentimientos distintos a los míos
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p67" id="pregunta67" width="1%" required></td>
             <td><input type="radio" value="3" name="p67" id="pregunta67" width="1%"></td>
             <td><input type="radio" value="2" name="p67" id="pregunta67" width="1%"></td>
             <td><input type="radio" value="1" name="p67" id="pregunta67" width="1%"></td>
             <td><input type="radio" value="0" name="p67" id="pregunta67" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
        <tr>
         <th>
        Mi trabajo me exige atender situaciones de violencia
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p68" id="pregunta68" width="1%" required></td>
             <td><input type="radio" value="3" name="p68" id="pregunta68" width="1%"></td>
             <td><input type="radio" value="2" name="p68" id="pregunta68" width="1%"></td>
             <td><input type="radio" value="1" name="p68" id="pregunta68" width="1%"></td>
             <td><input type="radio" value="0" name="p68" id="pregunta68" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         </table>
         <br>
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
             <td><input type="radio" value="1" name="preguntaB" id="preguntaB" width="3%" required></td>
             <td><input type="radio" value="0" name="preguntaB" id="preguntaB" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         </table>
         <br>
        <br>
     </div>
    <button type="submit">Avanzar</button> 
    </center>
    <br>
</form>
        <center><a href="../vista/seleccionc.php"><button>Cancelar</button></a></center><br>
    
</body>

<?php
include_once("Pie.html");
?>