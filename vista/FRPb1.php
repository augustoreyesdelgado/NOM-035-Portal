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
<form id="frm" method="post" action="../controlador/FRPb1.php">
    
     <center><div class="contt">
        <br>
         <center><b>Evaluaci&oacute;n de <?php echo $_SESSION["nombre"]; ?></b></center>
         <br>
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