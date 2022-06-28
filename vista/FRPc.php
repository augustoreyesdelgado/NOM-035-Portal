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
<form id="frm" method="post" action="../controlador/FRPc.php">
    
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
             <td><input type="radio" value="4" name="pregunta44" id="pregunta44" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta44" id="pregunta44" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta44" id="pregunta44" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta44" id="pregunta44" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta44" id="pregunta44" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta45" id="pregunta45" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta45" id="pregunta45" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta45" id="pregunta45" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta45" id="pregunta45" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta45" id="pregunta45" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta46" id="pregunta46" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta46" id="pregunta46" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta46" id="pregunta46" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta46" id="pregunta46" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta46" id="pregunta46" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         </table>
         
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