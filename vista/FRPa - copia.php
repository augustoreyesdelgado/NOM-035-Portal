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
<form id="frm" method="post" action="../controlador/FRPa.php">
    
     <center><div class="contt">
        <br>
         <center><b>Evaluaci&oacute;n de <?php echo $_SESSION["nombre"]; ?></b></center>
         <br>
         <table id="especel2">
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
             <td><input type="radio" value="4" name="pregunta1" id="pregunta1" width="1%" required></td>
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
         Me preocupa sufrir un accidente en mi trabajo 
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="pregunta2" id="pregunta2" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta2" id="pregunta2" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta2" id="pregunta2" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta3" id="pregunta3" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta3" id="pregunta3" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta3" id="pregunta3" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta4" id="pregunta4" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta4" id="pregunta4" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta4" id="pregunta4" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta4" id="pregunta4" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta4" id="pregunta4" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta5" id="pregunta5" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta5" id="pregunta5" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta5" id="pregunta5" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta5" id="pregunta5" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta5" id="pregunta5" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta6" id="pregunta6" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta6" id="pregunta6" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta6" id="pregunta6" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta6" id="pregunta6" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta6" id="pregunta6" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta7" id="pregunta7" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta7" id="pregunta7" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta7" id="pregunta7" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta7" id="pregunta7" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta7" id="pregunta7" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta8" id="pregunta8" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta8" id="pregunta8" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta8" id="pregunta8" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta8" id="pregunta8" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta8" id="pregunta8" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta9" id="pregunta9" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta9" id="pregunta9" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta9" id="pregunta9" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta9" id="pregunta9" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta9" id="pregunta9" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta10" id="pregunta10" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta10" id="pregunta10" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta10" id="pregunta10" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta10" id="pregunta10" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta10" id="pregunta10" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta11" id="pregunta11" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta11" id="pregunta11" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta11" id="pregunta11" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta11" id="pregunta11" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta11" id="pregunta11" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
             <tr>
         <th>
         En mi trabajo me dan órdenes contradictorias
         </th>
         <th>
         <table>
         <tr>
             <td>Siempre</td><td>Casi siempre</td><td>Algunas veces</td><td>Casi nunca</td><td>Nunca</td>
         </tr>
         <tr>
             <td><input type="radio" value="4" name="pregunta12" id="pregunta12" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta12" id="pregunta12" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta12" id="pregunta12" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta12" id="pregunta12" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta12" id="pregunta12" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta13" id="pregunta13" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta13" id="pregunta13" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta13" id="pregunta13" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta13" id="pregunta13" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta13" id="pregunta13" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta14" id="pregunta14" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta14" id="pregunta14" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta14" id="pregunta14" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta14" id="pregunta14" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta14" id="pregunta14" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta15" id="pregunta15" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta15" id="pregunta15" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta15" id="pregunta15" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta15" id="pregunta15" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta15" id="pregunta15" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta16" id="pregunta16" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta16" id="pregunta16" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta16" id="pregunta16" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta16" id="pregunta16" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta16" id="pregunta16" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta17" id="pregunta17" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta17" id="pregunta17" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta17" id="pregunta17" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta17" id="pregunta17" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta17" id="pregunta17" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta18" id="pregunta18" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta18" id="pregunta18" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta18" id="pregunta18" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta18" id="pregunta18" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta18" id="pregunta18" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta19" id="pregunta19" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta19" id="pregunta19" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta19" id="pregunta19" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta19" id="pregunta19" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta19" id="pregunta19" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta20" id="pregunta20" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta20" id="pregunta20" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta20" id="pregunta20" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta20" id="pregunta20" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta20" id="pregunta20" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta21" id="pregunta21" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta21" id="pregunta21" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta21" id="pregunta21" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta21" id="pregunta21" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta21" id="pregunta21" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta22" id="pregunta22" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta22" id="pregunta22" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta22" id="pregunta22" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta22" id="pregunta22" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta22" id="pregunta22" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta23" id="pregunta23" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta23" id="pregunta23" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta23" id="pregunta23" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta23" id="pregunta23" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta23" id="pregunta23" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta24" id="pregunta24" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta24" id="pregunta24" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta24" id="pregunta24" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta24" id="pregunta24" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta24" id="pregunta24" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta25" id="pregunta25" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta25" id="pregunta25" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta25" id="pregunta25" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta25" id="pregunta25" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta25" id="pregunta25" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta26" id="pregunta26" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta26" id="pregunta26" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta26" id="pregunta26" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta26" id="pregunta26" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta26" id="pregunta26" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta27" id="pregunta27" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta27" id="pregunta27" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta27" id="pregunta27" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta27" id="pregunta27" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta27" id="pregunta27" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta28" id="pregunta28" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta28" id="pregunta28" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta28" id="pregunta28" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta28" id="pregunta28" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta28" id="pregunta28" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta29" id="pregunta29" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta29" id="pregunta29" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta29" id="pregunta29" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta29" id="pregunta29" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta29" id="pregunta29" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta30" id="pregunta30" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta30" id="pregunta30" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta30" id="pregunta30" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta30" id="pregunta30" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta30" id="pregunta30" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta31" id="pregunta31" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta31" id="pregunta31" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta31" id="pregunta31" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta31" id="pregunta31" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta31" id="pregunta31" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta32" id="pregunta32" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta32" id="pregunta32" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta32" id="pregunta32" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta32" id="pregunta32" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta32" id="pregunta32" width="1%"></td>
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
             <td><input type="radio" value="0" name="pregunta33" id="pregunta33" width="1%" required></td>
             <td><input type="radio" value="1" name="pregunta33" id="pregunta33" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta33" id="pregunta33" width="1%"></td>
             <td><input type="radio" value="3" name="pregunta33" id="pregunta33" width="1%"></td>
             <td><input type="radio" value="4" name="pregunta33" id="pregunta33" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta34" id="pregunta34" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta34" id="pregunta34" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta34" id="pregunta34" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta34" id="pregunta34" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta34" id="pregunta34" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta35" id="pregunta35" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta35" id="pregunta35" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta35" id="pregunta35" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta35" id="pregunta35" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta35" id="pregunta35" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta36" id="pregunta36" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta36" id="pregunta36" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta36" id="pregunta36" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta36" id="pregunta36" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta36" id="pregunta36" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta37" id="pregunta37" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta37" id="pregunta37" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta37" id="pregunta37" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta37" id="pregunta37" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta37" id="pregunta37" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta38" id="pregunta38" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta38" id="pregunta38" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta38" id="pregunta38" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta38" id="pregunta38" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta38" id="pregunta38" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta39" id="pregunta39" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta39" id="pregunta39" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta39" id="pregunta39" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta39" id="pregunta39" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta39" id="pregunta39" width="1%"></td>
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
             <td><input type="radio" value="4" name="pregunta40" id="pregunta40" width="1%" required></td>
             <td><input type="radio" value="3" name="pregunta40" id="pregunta40" width="1%"></td>
             <td><input type="radio" value="2" name="pregunta40" id="pregunta40" width="1%"></td>
             <td><input type="radio" value="1" name="pregunta40" id="pregunta40" width="1%"></td>
             <td><input type="radio" value="0" name="pregunta40" id="pregunta40" width="1%"></td>
         </tr>
         </table>
         </th>
         </tr>
             
         </table>
         <br>
         <table id="especel2">
         <tr>
         <th align="left">
         En mi trabajo debo brindar servicio a clientes o usuarios:</th>
         <th>
         <table>
         <tr>
             <td>Si</td><td>No</td>
         </tr>
         <tr>
             <td><input type="radio" value="1" name="preguntaA" id="preguntaA" width="3%" required></td>
             <td><input type="radio" value="0" name="preguntaA" id="preguntaA" width="3%"></td>
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