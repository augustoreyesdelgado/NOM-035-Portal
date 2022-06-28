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
<form id="frm" method="post" action="../controlador/FREOa.php">
    
     <center><div class="contt">
        <br>
         <center><b>Evaluaci&oacute;n de <?php echo $_SESSION["nombre"]; ?></b></center>
         <br>
         <table id="especel2">
         <tr>
         <th>
         	
El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p1" id="p1" width="1%" required></td>
             <td><input type="radio" value="1" name="p1" id="p1" width="1%"></td>
             <td><input type="radio" value="2" name="p1" id="p1" width="1%"></td>
             <td><input type="radio" value="3" name="p1" id="p1" width="1%"></td>
             <td><input type="radio" value="4" name="p1" id="p1" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th>
         Mi trabajo me exige hacer mucho esfuerzo físico 
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p2" id="pregunta2" width="1%" required></td>
             <td><input type="radio" value="3" name="p2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="2" name="p2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="1" name="p2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="0" name="p2" id="pregunta2" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
         <tr>
         <th>
         Me preocupa sufrir un accidente en mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p3" id="pregunta3" width="1%" required></td>
             <td><input type="radio" value="3" name="p3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="2" name="p3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="1" name="p3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="0" name="p3" id="pregunta3" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         <tr>
         <th>
         Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p4" id="pregunta4" width="1%" required></td>
             <td><input type="radio" value="1" name="p4" id="pregunta4" width="1%"></td>
             <td><input type="radio" value="2" name="p4" id="pregunta4" width="1%"></td>
             <td><input type="radio" value="3" name="p4" id="pregunta4" width="1%"></td>
             <td><input type="radio" value="4" name="p4" id="pregunta4" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
        <tr>
         <th>
        Considero que las actividades que realizo son peligrosas
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p5" id="pregunta5" width="1%" required></td>
             <td><input type="radio" value="3" name="p5" id="pregunta5" width="1%"></td>
             <td><input type="radio" value="2" name="p5" id="pregunta5" width="1%"></td>
             <td><input type="radio" value="1" name="p5" id="pregunta5" width="1%"></td>
             <td><input type="radio" value="0" name="p5" id="pregunta5" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p6" id="pregunta6" width="1%" required></td>
             <td><input type="radio" value="3" name="p6" id="pregunta6" width="1%"></td>
             <td><input type="radio" value="2" name="p6" id="pregunta6" width="1%"></td>
             <td><input type="radio" value="1" name="p6" id="pregunta6" width="1%"></td>
             <td><input type="radio" value="0" name="p6" id="pregunta6" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Por la cantidad de trabajo que tengo debo trabajar sin parar
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p7" id="pregunta7" width="1%" required></td>
             <td><input type="radio" value="3" name="p7" id="pregunta7" width="1%"></td>
             <td><input type="radio" value="2" name="p7" id="pregunta7" width="1%"></td>
             <td><input type="radio" value="1" name="p7" id="pregunta7" width="1%"></td>
             <td><input type="radio" value="0" name="p7" id="pregunta7" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Considero que es necesario mantener un ritmo de trabajo acelerado
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p8" id="pregunta8" width="1%" required></td>
             <td><input type="radio" value="3" name="p8" id="pregunta8" width="1%"></td>
             <td><input type="radio" value="2" name="p8" id="pregunta8" width="1%"></td>
             <td><input type="radio" value="1" name="p8" id="pregunta8" width="1%"></td>
             <td><input type="radio" value="0" name="p8" id="pregunta8" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Mi trabajo exige que esté muy concentrado 
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p9" id="pregunta9" width="1%" required></td>
             <td><input type="radio" value="3" name="p9" id="pregunta9" width="1%"></td>
             <td><input type="radio" value="2" name="p9" id="pregunta9" width="1%"></td>
             <td><input type="radio" value="1" name="p9" id="pregunta9" width="1%"></td>
             <td><input type="radio" value="0" name="p9" id="pregunta9" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Mi trabajo requiere que memorice mucha información
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p10" id="pregunta10" width="1%" required></td>
             <td><input type="radio" value="3" name="p10" id="pregunta10" width="1%"></td>
             <td><input type="radio" value="2" name="p10" id="pregunta10" width="1%"></td>
             <td><input type="radio" value="1" name="p10" id="pregunta10" width="1%"></td>
             <td><input type="radio" value="0" name="p10" id="pregunta10" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         En mi trabajo tengo que tomar decisiones difíciles muy rápido
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p11" id="pregunta11" width="1%" required></td>
             <td><input type="radio" value="3" name="p11" id="pregunta11" width="1%"></td>
             <td><input type="radio" value="2" name="p11" id="pregunta11" width="1%"></td>
             <td><input type="radio" value="1" name="p11" id="pregunta11" width="1%"></td>
             <td><input type="radio" value="0" name="p11" id="pregunta11" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Mi trabajo exige que atienda varios asuntos al mismo tiempo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p12" id="pregunta12" width="1%" required></td>
             <td><input type="radio" value="3" name="p12" id="pregunta12" width="1%"></td>
             <td><input type="radio" value="2" name="p12" id="pregunta12" width="1%"></td>
             <td><input type="radio" value="1" name="p12" id="pregunta12" width="1%"></td>
             <td><input type="radio" value="0" name="p12" id="pregunta12" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         En mi trabajo soy responsable de cosas de mucho valor
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p13" id="pregunta13" width="1%" required></td>
             <td><input type="radio" value="3" name="p13" id="pregunta13" width="1%"></td>
             <td><input type="radio" value="2" name="p13" id="pregunta13" width="1%"></td>
             <td><input type="radio" value="1" name="p13" id="pregunta13" width="1%"></td>
             <td><input type="radio" value="0" name="p13" id="pregunta13" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Respondo ante mi jefe por los resultados de toda mi área de trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p14" id="pregunta14" width="1%" required></td>
             <td><input type="radio" value="3" name="p14" id="pregunta14" width="1%"></td>
             <td><input type="radio" value="2" name="p14" id="pregunta14" width="1%"></td>
             <td><input type="radio" value="1" name="p14" id="pregunta14" width="1%"></td>
             <td><input type="radio" value="0" name="p14" id="pregunta14" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         En el trabajo me dan órdenes contradictorias
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p15" id="pregunta15" width="1%" required></td>
             <td><input type="radio" value="3" name="p15" id="pregunta15" width="1%"></td>
             <td><input type="radio" value="2" name="p15" id="pregunta15" width="1%"></td>
             <td><input type="radio" value="1" name="p15" id="pregunta15" width="1%"></td>
             <td><input type="radio" value="0" name="p15" id="pregunta15" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Considero que en mi trabajo me piden hacer cosas innecesarias
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p16" id="pregunta16" width="1%" required></td>
             <td><input type="radio" value="3" name="p16" id="pregunta16" width="1%"></td>
             <td><input type="radio" value="2" name="p16" id="pregunta16" width="1%"></td>
             <td><input type="radio" value="1" name="p16" id="pregunta16" width="1%"></td>
             <td><input type="radio" value="0" name="p16" id="pregunta16" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Trabajo horas extras más de tres veces a la semana
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p17" id="pregunta17" width="1%" required></td>
             <td><input type="radio" value="3" name="p17" id="pregunta17" width="1%"></td>
             <td><input type="radio" value="2" name="p17" id="pregunta17" width="1%"></td>
             <td><input type="radio" value="1" name="p17" id="pregunta17" width="1%"></td>
             <td><input type="radio" value="0" name="p17" id="pregunta17" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Mi trabajo me exige laborar en días de descanso, festivos o fines de semana
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p18" id="pregunta18" width="1%" required></td>
             <td><input type="radio" value="3" name="p18" id="pregunta18" width="1%"></td>
             <td><input type="radio" value="2" name="p18" id="pregunta18" width="1%"></td>
             <td><input type="radio" value="1" name="p18" id="pregunta18" width="1%"></td>
             <td><input type="radio" value="0" name="p18" id="pregunta18" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p19" id="pregunta19" width="1%" required></td>
             <td><input type="radio" value="3" name="p19" id="pregunta19" width="1%"></td>
             <td><input type="radio" value="2" name="p19" id="pregunta19" width="1%"></td>
             <td><input type="radio" value="1" name="p19" id="pregunta19" width="1%"></td>
             <td><input type="radio" value="0" name="p19" id="pregunta19" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
Debo atender asuntos de trabajo cuando estoy en casa
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p20" id="pregunta20" width="1%" required></td>
             <td><input type="radio" value="3" name="p20" id="pregunta20" width="1%"></td>
             <td><input type="radio" value="2" name="p20" id="pregunta20" width="1%"></td>
             <td><input type="radio" value="1" name="p20" id="pregunta20" width="1%"></td>
             <td><input type="radio" value="0" name="p20" id="pregunta20" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Pienso en las actividades familiares o personales cuando estoy en mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p21" id="pregunta21" width="1%" required></td>
             <td><input type="radio" value="3" name="p21" id="pregunta21" width="1%"></td>
             <td><input type="radio" value="2" name="p21" id="pregunta21" width="1%"></td>
             <td><input type="radio" value="1" name="p21" id="pregunta21" width="1%"></td>
             <td><input type="radio" value="0" name="p21" id="pregunta21" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         	Pienso que mis responsabilidades familiares afectan mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p22" id="pregunta22" width="1%" required></td>
             <td><input type="radio" value="3" name="p22" id="pregunta22" width="1%"></td>
             <td><input type="radio" value="2" name="p22" id="pregunta22" width="1%"></td>
             <td><input type="radio" value="1" name="p22" id="pregunta22" width="1%"></td>
             <td><input type="radio" value="0" name="p22" id="pregunta22" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Mi trabajo permite que desarrolle nuevas habilidades
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p23" id="pregunta23" width="1%" required></td>
             <td><input type="radio" value="1" name="p23" id="pregunta23" width="1%"></td>
             <td><input type="radio" value="2" name="p23" id="pregunta23" width="1%"></td>
             <td><input type="radio" value="3" name="p23" id="pregunta23" width="1%"></td>
             <td><input type="radio" value="4" name="p23" id="pregunta23" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
 En mi trabajo puedo aspirar a un mejor puesto
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p24" id="pregunta24" width="1%" required></td>
             <td><input type="radio" value="1" name="p24" id="pregunta24" width="1%"></td>
             <td><input type="radio" value="2" name="p24" id="pregunta24" width="1%"></td>
             <td><input type="radio" value="3" name="p24" id="pregunta24" width="1%"></td>
             <td><input type="radio" value="4" name="p24" id="pregunta24" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Durante mi jornada de trabajo puedo tomar pausas cuando las necesito
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p25" id="pregunta25" width="1%" required></td>
             <td><input type="radio" value="1" name="p25" id="pregunta25" width="1%"></td>
             <td><input type="radio" value="2" name="p25" id="pregunta25" width="1%"></td>
             <td><input type="radio" value="3" name="p25" id="pregunta25" width="1%"></td>
             <td><input type="radio" value="4" name="p25" id="pregunta25" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Puedo decidir cuánto trabajo realizo durante la jornada laboral
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p26" id="pregunta26" width="1%" required></td>
             <td><input type="radio" value="1" name="p26" id="pregunta26" width="1%"></td>
             <td><input type="radio" value="2" name="p26" id="pregunta26" width="1%"></td>
             <td><input type="radio" value="3" name="p26" id="pregunta26" width="1%"></td>
             <td><input type="radio" value="4" name="p26" id="pregunta26" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p27" id="pregunta27" width="1%" required></td>
             <td><input type="radio" value="1" name="p27" id="pregunta27" width="1%"></td>
             <td><input type="radio" value="2" name="p27" id="pregunta27" width="1%"></td>
             <td><input type="radio" value="3" name="p27" id="pregunta27" width="1%"></td>
             <td><input type="radio" value="4" name="p27" id="pregunta27" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Puedo cambiar el orden de las actividades que realizo en mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p28" id="pregunta28" width="1%" required></td>
             <td><input type="radio" value="1" name="p28" id="pregunta28" width="1%"></td>
             <td><input type="radio" value="2" name="p28" id="pregunta28" width="1%"></td>
             <td><input type="radio" value="3" name="p28" id="pregunta28" width="1%"></td>
             <td><input type="radio" value="4" name="p28" id="pregunta28" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Los cambios que se presentan en mi trabajo dificultan mi labor
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p29" id="pregunta29" width="1%" required></td>
             <td><input type="radio" value="3" name="p29" id="pregunta29" width="1%"></td>
             <td><input type="radio" value="2" name="p29" id="pregunta29" width="1%"></td>
             <td><input type="radio" value="1" name="p29" id="pregunta29" width="1%"></td>
             <td><input type="radio" value="0" name="p29" id="pregunta29" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p30" id="pregunta30" width="1%" required></td>
             <td><input type="radio" value="1" name="p30" id="pregunta30" width="1%"></td>
             <td><input type="radio" value="2" name="p30" id="pregunta30" width="1%"></td>
             <td><input type="radio" value="3" name="p30" id="pregunta30" width="1%"></td>
             <td><input type="radio" value="4" name="p30" id="pregunta30" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Me informan con claridad cuáles son mis funciones
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p31" id="pregunta31" width="1%" required></td>
             <td><input type="radio" value="1" name="p31" id="pregunta31" width="1%"></td>
             <td><input type="radio" value="2" name="p31" id="pregunta31" width="1%"></td>
             <td><input type="radio" value="3" name="p31" id="pregunta31" width="1%"></td>
             <td><input type="radio" value="4" name="p31" id="pregunta31" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Me explican claramente los resultados que debo obtener en mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p32" id="pregunta32" width="1%" required></td>
             <td><input type="radio" value="1" name="p32" id="pregunta32" width="1%"></td>
             <td><input type="radio" value="2" name="p32" id="pregunta32" width="1%"></td>
             <td><input type="radio" value="3" name="p32" id="pregunta32" width="1%"></td>
             <td><input type="radio" value="4" name="p32" id="pregunta32" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Me explican claramente los objetivos de mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p33" id="pregunta33" width="1%" required></td>
             <td><input type="radio" value="1" name="p33" id="pregunta33" width="1%"></td>
             <td><input type="radio" value="2" name="p33" id="pregunta33" width="1%"></td>
             <td><input type="radio" value="3" name="p33" id="pregunta33" width="1%"></td>
             <td><input type="radio" value="4" name="p33" id="pregunta33" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Me informan con quién puedo resolver problemas o asuntos de trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p34" id="pregunta34" width="1%" required></td>
             <td><input type="radio" value="1" name="p34" id="pregunta34" width="1%"></td>
             <td><input type="radio" value="2" name="p34" id="pregunta34" width="1%"></td>
             <td><input type="radio" value="3" name="p34" id="pregunta34" width="1%"></td>
             <td><input type="radio" value="4" name="p34" id="pregunta34" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Me permiten asistir a capacitaciones relacionadas con mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p35" id="pregunta35" width="1%" required></td>
             <td><input type="radio" value="1" name="p35" id="pregunta35" width="1%"></td>
             <td><input type="radio" value="2" name="p35" id="pregunta35" width="1%"></td>
             <td><input type="radio" value="3" name="p35" id="pregunta35" width="1%"></td>
             <td><input type="radio" value="4" name="p35" id="pregunta35" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Recibo capacitación útil para hacer mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p36" id="pregunta36" width="1%" required></td>
             <td><input type="radio" value="1" name="p36" id="pregunta36" width="1%"></td>
             <td><input type="radio" value="2" name="p36" id="pregunta36" width="1%"></td>
             <td><input type="radio" value="3" name="p36" id="pregunta36" width="1%"></td>
             <td><input type="radio" value="4" name="p36" id="pregunta36" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Mi jefe ayuda a organizar mejor el trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p37" id="pregunta37" width="1%" required></td>
             <td><input type="radio" value="1" name="p37" id="pregunta37" width="1%"></td>
             <td><input type="radio" value="2" name="p37" id="pregunta37" width="1%"></td>
             <td><input type="radio" value="3" name="p37" id="pregunta37" width="1%"></td>
             <td><input type="radio" value="4" name="p37" id="pregunta37" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Mi jefe tiene en cuenta mis puntos de vista y opiniones
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p38" id="pregunta38" width="1%" required></td>
             <td><input type="radio" value="1" name="p38" id="pregunta38" width="1%"></td>
             <td><input type="radio" value="2" name="p38" id="pregunta38" width="1%"></td>
             <td><input type="radio" value="3" name="p38" id="pregunta38" width="1%"></td>
             <td><input type="radio" value="4" name="p38" id="pregunta38" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Mi jefe me comunica a tiempo la información relacionada con el trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="p39" id="pregunta39" width="1%" required></td>
             <td><input type="radio" value="2" name="p39" id="pregunta39" width="1%"></td>
             <td><input type="radio" value="2" name="p39" id="pregunta39" width="1%"></td>
             <td><input type="radio" value="3" name="p39" id="pregunta39" width="1%"></td>
             <td><input type="radio" value="4" name="p39" id="pregunta39" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p40" id="pregunta40" width="1%" required></td>
             <td><input type="radio" value="1" name="p40" id="pregunta40" width="1%"></td>
             <td><input type="radio" value="2" name="p40" id="pregunta40" width="1%"></td>
             <td><input type="radio" value="3" name="p40" id="pregunta40" width="1%"></td>
             <td><input type="radio" value="4" name="p40" id="pregunta40" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p41" id="pregunta41" width="1%" required></td>
             <td><input type="radio" value="1" name="p41" id="pregunta41" width="1%"></td>
             <td><input type="radio" value="2" name="p41" id="pregunta41" width="1%"></td>
             <td><input type="radio" value="3" name="p41" id="pregunta41" width="1%"></td>
             <td><input type="radio" value="4" name="p41" id="pregunta41" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Puedo confiar en mis compañeros de trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p42" id="pregunta42" width="1%" required></td>
             <td><input type="radio" value="1" name="p42" id="pregunta42" width="1%"></td>
             <td><input type="radio" value="2" name="p42" id="pregunta42" width="1%"></td>
             <td><input type="radio" value="3" name="p42" id="pregunta42" width="1%"></td>
             <td><input type="radio" value="4" name="p42" id="pregunta42" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Entre compañeros solucionamos los problemas de trabajo de forma respetuosa
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p43" id="pregunta43" width="1%" required></td>
             <td><input type="radio" value="1" name="p43" id="pregunta43" width="1%"></td>
             <td><input type="radio" value="2" name="p43" id="pregunta43" width="1%"></td>
             <td><input type="radio" value="3" name="p43" id="pregunta43" width="1%"></td>
             <td><input type="radio" value="4" name="p43" id="pregunta43" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        En mi trabajo me hacen sentir parte del grupo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p44" id="pregunta44" width="1%" required></td>
             <td><input type="radio" value="1" name="p44" id="pregunta44" width="1%"></td>
             <td><input type="radio" value="2" name="p44" id="pregunta44" width="1%"></td>
             <td><input type="radio" value="3" name="p44" id="pregunta44" width="1%"></td>
             <td><input type="radio" value="4" name="p44" id="pregunta44" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Cuando tenemos que realizar trabajo de equipo los compañeros colaboran
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p45" id="pregunta45" width="1%" required></td>
             <td><input type="radio" value="1" name="p45" id="pregunta45" width="1%"></td>
             <td><input type="radio" value="2" name="p45" id="pregunta45" width="1%"></td>
             <td><input type="radio" value="3" name="p45" id="pregunta45" width="1%"></td>
             <td><input type="radio" value="4" name="p45" id="pregunta45" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
      Mis compañeros de trabajo me ayudan cuando tengo dificultades
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p46" id="pregunta46" width="1%" required></td>
             <td><input type="radio" value="1" name="p46" id="pregunta46" width="1%"></td>
             <td><input type="radio" value="2" name="p46" id="pregunta46" width="1%"></td>
             <td><input type="radio" value="3" name="p46" id="pregunta46" width="1%"></td>
             <td><input type="radio" value="4" name="p46" id="pregunta46" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        Me informan sobre lo que hago bien en mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p47" id="pregunta47" width="1%" required></td>
             <td><input type="radio" value="1" name="p47" id="pregunta47" width="1%"></td>
             <td><input type="radio" value="2" name="p47" id="pregunta47" width="1%"></td>
             <td><input type="radio" value="3" name="p47" id="pregunta47" width="1%"></td>
             <td><input type="radio" value="4" name="p47" id="pregunta47" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p48" id="pregunta48" width="1%" required></td>
             <td><input type="radio" value="1" name="p48" id="pregunta48" width="1%"></td>
             <td><input type="radio" value="2" name="p48" id="pregunta48" width="1%"></td>
             <td><input type="radio" value="3" name="p48" id="pregunta48" width="1%"></td>
             <td><input type="radio" value="4" name="p48" id="pregunta48" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
       En mi centro de trabajo me pagan a tiempo mi salario
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p49" id="pregunta49" width="1%" required></td>
             <td><input type="radio" value="1" name="p49" id="pregunta49" width="1%"></td>
             <td><input type="radio" value="2" name="p49" id="pregunta49" width="1%"></td>
             <td><input type="radio" value="3" name="p49" id="pregunta49" width="1%"></td>
             <td><input type="radio" value="4" name="p49" id="pregunta49" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
        El pago que recibo es el que merezco por el trabajo que realizo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p50" id="pregunta50" width="1%" required></td>
             <td><input type="radio" value="1" name="p50" id="pregunta50" width="1%"></td>
             <td><input type="radio" value="2" name="p50" id="pregunta50" width="1%"></td>
             <td><input type="radio" value="3" name="p50" id="pregunta50" width="1%"></td>
             <td><input type="radio" value="4" name="p50" id="pregunta50" width="1%"></td>
         </tr>        </table>
         </th>
         </tr>
             
             <tr>
         <th>
    Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p51" id="pregunta51" width="1%" required></td>
             <td><input type="radio" value="1" name="p51" id="pregunta51" width="1%"></td>
             <td><input type="radio" value="2" name="p51" id="pregunta51" width="1%"></td>
             <td><input type="radio" value="3" name="p51" id="pregunta51" width="1%"></td>
             <td><input type="radio" value="4" name="p51" id="pregunta51" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Las personas que hacen bien el trabajo pueden crecer laboralmente
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p52" id="pregunta52" width="1%" required></td>
             <td><input type="radio" value="1" name="p52" id="pregunta52" width="1%"></td>
             <td><input type="radio" value="2" name="p52" id="pregunta52" width="1%"></td>
             <td><input type="radio" value="3" name="p52" id="pregunta52" width="1%"></td>
             <td><input type="radio" value="4" name="p52" id="pregunta52" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Considero que mi trabajo es estable
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p53" id="pregunta53" width="1%" required></td>
             <td><input type="radio" value="1" name="p53" id="pregunta53" width="1%"></td>
             <td><input type="radio" value="2" name="p53" id="pregunta53" width="1%"></td>
             <td><input type="radio" value="3" name="p53" id="pregunta53" width="1%"></td>
             <td><input type="radio" value="4" name="p53" id="pregunta53" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         En mi trabajo existe continua rotación de personal
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p54" id="pregunta54" width="1%" required></td>
             <td><input type="radio" value="3" name="p54" id="pregunta54" width="1%"></td>
             <td><input type="radio" value="2" name="p54" id="pregunta54" width="1%"></td>
             <td><input type="radio" value="1" name="p54" id="pregunta54" width="1%"></td>
             <td><input type="radio" value="0" name="p54" id="pregunta54" width="1%"></td>
         </tr>        </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Siento orgullo de laborar en este centro de trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p55" id="pregunta55" width="1%" required></td>
             <td><input type="radio" value="1" name="p55" id="pregunta55" width="1%"></td>
             <td><input type="radio" value="2" name="p55" id="pregunta55" width="1%"></td>
             <td><input type="radio" value="3" name="p55" id="pregunta55" width="1%"></td>
             <td><input type="radio" value="4" name="p55" id="pregunta55" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Me siento comprometido con mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p56" id="pregunta56" width="1%" required></td>
             <td><input type="radio" value="1" name="p56" id="pregunta56" width="1%"></td>
             <td><input type="radio" value="2" name="p56" id="pregunta56" width="1%"></td>
             <td><input type="radio" value="3" name="p56" id="pregunta56" width="1%"></td>
             <td><input type="radio" value="4" name="p56" id="pregunta56" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         En mi trabajo puedo expresarme libremente sin interrupciones
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="0" name="p57" id="pregunta57" width="1%" required></td>
             <td><input type="radio" value="1" name="p57" id="pregunta57" width="1%"></td>
             <td><input type="radio" value="2" name="p57" id="pregunta57" width="1%"></td>
             <td><input type="radio" value="3" name="p57" id="pregunta57" width="1%"></td>
             <td><input type="radio" value="4" name="p57" id="pregunta57" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Recibo críticas constantes a mi persona y/o trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p58" id="pregunta58" width="1%" required></td>
             <td><input type="radio" value="3" name="p58" id="pregunta58" width="1%"></td>
             <td><input type="radio" value="2" name="p58" id="pregunta58" width="1%"></td>
             <td><input type="radio" value="1" name="p58" id="pregunta58" width="1%"></td>
             <td><input type="radio" value="0" name="p58" id="pregunta58" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p59" id="pregunta59" width="1%" required></td>
             <td><input type="radio" value="3" name="p59" id="pregunta59" width="1%"></td>
             <td><input type="radio" value="2" name="p59" id="pregunta59" width="1%"></td>
             <td><input type="radio" value="1" name="p59" id="pregunta59" width="1%"></td>
             <td><input type="radio" value="0" name="p59" id="pregunta59" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p60" id="pregunta60" width="1%" required></td>
             <td><input type="radio" value="3" name="p60" id="pregunta60" width="1%"></td>
             <td><input type="radio" value="2" name="p60" id="pregunta60" width="1%"></td>
             <td><input type="radio" value="1" name="p60" id="pregunta60" width="1%"></td>
             <td><input type="radio" value="0" name="p60" id="pregunta60" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p61" id="pregunta61" width="1%" required></td>
             <td><input type="radio" value="3" name="p61" id="pregunta61" width="1%"></td>
             <td><input type="radio" value="2" name="p61" id="pregunta61" width="1%"></td>
             <td><input type="radio" value="1" name="p61" id="pregunta61" width="1%"></td>
             <td><input type="radio" value="0" name="p61" id="pregunta61" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p62" id="pregunta62" width="1%" required></td>
             <td><input type="radio" value="3" name="p62" id="pregunta62" width="1%"></td>
             <td><input type="radio" value="2" name="p62" id="pregunta62" width="1%"></td>
             <td><input type="radio" value="1" name="p62" id="pregunta62" width="1%"></td>
             <td><input type="radio" value="0" name="p62" id="pregunta62" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p63" id="pregunta63" width="1%" required></td>
             <td><input type="radio" value="3" name="p63" id="pregunta63" width="1%"></td>
             <td><input type="radio" value="2" name="p63" id="pregunta63" width="1%"></td>
             <td><input type="radio" value="1" name="p63" id="pregunta63" width="1%"></td>
             <td><input type="radio" value="0" name="p63" id="pregunta63" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         He presenciado actos de violencia en mi centro de trabajo
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="p64" id="pregunta64" width="1%" required></td>
             <td><input type="radio" value="3" name="p64" id="pregunta64" width="1%"></td>
             <td><input type="radio" value="2" name="p64" id="pregunta64" width="1%"></td>
             <td><input type="radio" value="1" name="p64" id="pregunta64" width="1%"></td>
             <td><input type="radio" value="0" name="p64" id="pregunta64" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         </table>
         <br>
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
         </div>
         <br>
        <br>
     </div>
    <button type="submit">Enviar</button> 
    </center>
    <br>
</form>
        <center><a href="../vista/seleccionc.php"><button>Cancelar</button></a></center><br>
    
</body>
<script>
    function agregar(){
     document.getElementById("extra1").innerHTML = '<table id="especel2">         <tr>         <th>        Atiendo clientes o usuarios muy enojados         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="p65" id="pregunta65" width="1%" required></td>             <td><input type="radio" value="3" name="p65" id="pregunta65" width="1%"></td>             <td><input type="radio" value="2" name="p65" id="pregunta65" width="1%"></td>             <td><input type="radio" value="1" name="p65" id="pregunta65" width="1%"></td>             <td><input type="radio" value="0" name="p65" id="pregunta65" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>         Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas        </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="p66" id="pregunta66" width="1%" required></td>             <td><input type="radio" value="3" name="p66" id="pregunta66" width="1%"></td>             <td><input type="radio" value="2" name="p66" id="pregunta66" width="1%"></td>             <td><input type="radio" value="1" name="p66" id="pregunta66" width="1%"></td>             <td><input type="radio" value="0" name="p66" id="pregunta66" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>         Para hacer mi trabajo debo demostrar sentimientos distintos a los míos         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="p67" id="pregunta67" width="1%" required></td>             <td><input type="radio" value="3" name="p67" id="pregunta67" width="1%"></td>             <td><input type="radio" value="2" name="p67" id="pregunta67" width="1%"></td>             <td><input type="radio" value="1" name="p67" id="pregunta67" width="1%"></td>             <td><input type="radio" value="0" name="p67" id="pregunta67" width="1%"></td>         </tr>         </table>         </th>         </tr>                     <tr>        <th>        Mi trabajo me exige atender situaciones de violencia         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="p68" id="pregunta68" width="1%" required></td>             <td><input type="radio" value="3" name="p68" id="pregunta68" width="1%"></td>             <td><input type="radio" value="2" name="p68" id="pregunta68" width="1%"></td>             <td><input type="radio" value="1" name="p68" id="pregunta68" width="1%"></td>             <td><input type="radio" value="0" name="p68" id="pregunta68" width="1%"></td>         </tr>         </table>         </th>         </tr>                      </table>';
     }
    function eliminar() {
    document.getElementById("extra1").innerHTML = '';	
    }
    function agregar2(){
     document.getElementById("extra2").innerHTML = ' <table id="especel2">         <tr>         <th>         Comunican tarde los asuntos de trabajo         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="p69" id="pregunta69" width="1%" required></td>             <td><input type="radio" value="3" name="p69" id="pregunta69" width="1%"></td>             <td><input type="radio" value="2" name="p69" id="pregunta69" width="1%"></td>            <td><input type="radio" value="1" name="p69" id="pregunta69" width="1%"></td>             <td><input type="radio" value="0" name="p69" id="pregunta69" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>         Dificultan el logro de los resultados del trabajo         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="p70" id="pregunta70" width="1%" required></td>             <td><input type="radio" value="3" name="p70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="2" name="p70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="1" name="p70" id="pregunta70" width="1%"></td>             <td><input type="radio" value="0" name="p70" id="pregunta70" width="1%"></td>         </tr>         </table>         </th>         </tr>         <tr>         <th>        Cooperan poco cuando se necesita         </th>         <th>         <table>         <tr>            <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="p71" id="pregunta71" width="1%" required></td>             <td><input type="radio" value="3" name="p71" id="pregunta71" width="1%"></td>             <td><input type="radio" value="2" name="p71" id="pregunta71" width="1%"></td>             <td><input type="radio" value="1" name="p71" id="pregunta71" width="1%"></td>             <td><input type="radio" value="0" name="p71" id="pregunta71" width="1%"></td>         </tr>         </table>         </th>         </tr>                      <tr>         <th>         Ignoran las sugerencias para mejorar su trabajo         </th>         <th>         <table>         <tr>             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>         </tr>         <tr>             <td><input type="radio" value="4" name="p72" id="pregunta72" width="1%" required></td>             <td><input type="radio" value="3" name="p72" id="pregunta72" width="1%"></td>             <td><input type="radio" value="2" name="p72" id="pregunta72" width="1%"></td>             <td><input type="radio" value="1" name="p72" id="pregunta72" width="1%"></td>             <td><input type="radio" value="0" name="p72" id="pregunta72" width="1%"></td>         </tr>         </table>         </th>         </tr>         </table>';
     }
    function eliminar2() {
    document.getElementById("extra2").innerHTML = '';	
    }
</script>
<?php }else{?>
        <section style="margin:12%">
        <center><p>usted no ha iniciado sesion para acceder a este sitio</p><br>
        <a href="../vista/index.php"><button type="submit">volver a inicio</button></a></center>
        <br></section>
<?php }
include_once("Pie.html");
?>