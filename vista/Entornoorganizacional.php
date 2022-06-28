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
<form id="frm" method="post" action="../controlador/calificardoctor.php">
    
     <center><div class="contt">
        <br>
         <center><b>Evaluaci&oacute;n de <?php echo $_SESSION["nombre"]; ?></b></center>
         <br>
         <table id="especel2">
         <tr>
         <th>
         Mi trabajo me exige hacer mucho esfuerzo físico: 
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="pregunta1" id="pregunta1" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta1" id="pregunta1" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta1" id="pregunta1" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta1" id="pregunta1" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta1" id="pregunta1" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th>
         Mi trabajo permite que desarrolle nuevas habilidades: 
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="pregunta2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta2" id="pregunta2" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th>
         Recibo capacitación útil para hacer mi trabajo: 
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="pregunta3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta3" id="pregunta3" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         </table>
         <br>
        <br>
     </div>
    <button type="submit">Enviar Test</button> 
    </center>
    <br>
</form>
        <center><a href="../vista/seleccionc.php"><button>Cancelar</button></a></center><br>
    
</body>

<?php
include_once("Pie.html");
?>