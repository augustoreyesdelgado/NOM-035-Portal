<?php
/* Este archivo sirve para desplegar una lista de documentos que ayudan en la acreditacion de la norma y un manual de las funciones del portal */
include_once("Header.html");
include_once("..\modelo\usuario.php");
session_start();
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==1){
include_once("menuT.html");
$object_usuario=new usuario();
$conexion=mysqli_connect("localhost","root","","nom-035");
?>
<section style="height:180%; width: 80%;margin-left:10%">
        <br>
        <center><h1>Manual de Usuario</h1></center>
        <center><a href="../resourses/Manual%20de%20usuario.pdf" target="_blank">Ver en otra pestaña</a></center>
        <br>
        <embed src="../resourses/Manual%20de%20usuario.pdf" type="application/pdf" width="100%" height="80%">  
</section>
<div></div>
<br><br>
<?php }else{?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
<?php }
include_once("Pie.html");
?>