<?php
session_start();
include_once("..\modelo\usuario.php");
include_once("Header.html");
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==1){
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
<form id="frm" method="post" action="../controlador/ATSI.php">
    
     <center><div class="contt">
        <br>
         <center><b>Evaluaci&oacute;n de <?php echo $_SESSION["nombre"]; ?></b></center>
         <br>
         <table id="especel2">
             
         <tr>
         <th><h5 align="left">¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes:<br>
   Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave?<br>
   Asaltos?<br>
   Actos violentos que derivaron en lesiones graves?<br>
   Secuestro?<br>
   Amenazas?, o
   Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?</h5>
        </th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta1" id="pregunta1" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta1" id="pregunta1" width="3%"></td>
             
         </tr>
         </table>
         </th>
         </tr>
         <?php ?>   
         </table>
         <br>
        <br>
     </div>
    <button type="submit">Continuar</button> 
    </center>
    <br>
</form>
        <center><a href="../vista/seleccionc.php"><button>Cancelar</button></a></center><br>
    
</body>

<?php }else{?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
<?php }
include_once("Pie.html");
?>