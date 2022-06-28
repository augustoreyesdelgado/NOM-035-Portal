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
<form id="frm" method="post" action="../controlador/ATSa.php">
    
     <center><div class="contt">
        <br>
         <center><b>Evaluaci&oacute;n de <?php echo $_SESSION["nombre"]; ?></b></center>
         <br>
         <table id="especel2">
             
          <tr>
         <th align="left">
         ¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?
         </th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta2" id="pregunta2" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta2" id="pregunta2" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th align="left">
         ¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta3" id="pregunta3" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta3" id="pregunta3" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
        <tr>
         <th align="left">
         ¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta4" id="pregunta4" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta4" id="pregunta4" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
        
        <tr>
         <th align="left">
         ¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento? </th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta5" id="pregunta5" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta5" id="pregunta5" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Ha tenido dificultad para recordar alguna parte importante del evento? </th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta6" id="pregunta6" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta6" id="pregunta6" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Ha disminuido su interés en sus actividades cotidianas?</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta7" id="pregunta7" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta7" id="pregunta7" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Se ha sentido usted alejado o distante de los demás?</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta8" id="pregunta8" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta8" id="pregunta8" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         <tr>
         <th align="left">
         ¿Ha notado que tiene dificultad para expresar sus sentimientos?</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta9" id="pregunta9" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta9" id="pregunta9" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?<th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta10" id="pregunta10" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta10" id="pregunta10" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Ha tenido usted dificultades para dormir?<th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta11" id="pregunta11" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta11" id="pregunta11" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Ha estado particularmente irritable o le han dado arranques de coraje?<th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta12" id="pregunta12" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta12" id="pregunta12" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Ha tenido dificultad para concentrarse?</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta13" id="pregunta13" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta13" id="pregunta13" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Ha estado nervioso o constantemente en alerta?</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta14" id="pregunta14" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta14" id="pregunta14" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th align="left">
         ¿Se ha sobresaltado fácilmente por cualquier cosa?</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="pregunta15" id="pregunta15" width="3%" required></td>
             <td><input type="radio" value="0" name="pregunta15" id="pregunta15" width="3%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         </table>
         <br>
        <br>
     </div>
    <button type="submit">Enviar</button> 
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