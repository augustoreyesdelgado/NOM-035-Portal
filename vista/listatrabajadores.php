<?php
/* Este archivo sirve para desplegar una lista con información de los empleados de el usuario empresa */
session_start();
include_once("Header.html");
include_once("..\modelo\usuario.php");
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==0){
include_once("menuE.html");
$object_usuario=new usuario();
$conexion=mysqli_connect("localhost","root","","nom-035");
?>
<section style="height:80%; width: 99%;margin-left:0.5%">
        <br>
         <center><b style="font-family:Helvetica;">Lista de trabajadores</b></center>
         <br>
<center><table id="tablaT">
    <tr>
    <th style="width:5%">Foto</th>
    <th style="width:15%">Apellido Materno</th>
    <th style="width:15%">Apellido Paterno</th>
    <th style="width:15%">Nombre(s)</th>
    <th>Edad</th>
    <th>Sexo</th>
    <th>Departamento</th>
    <th>Puesto</th>
    <th>Acontecimiento traum&aacute;tico severo</th>
    <?php if($_SESSION["nivel"]==3) {?>
    <th>Factores De Riesgo Psicosocial</th>
    <th>Factores De Riesgo Psicosocial Y Entorno Organizacional</th>
    <?php }else if($_SESSION["nivel"]==2){?>
        <th>Factores De Riesgo Psicosocial En Los Centros De Trabajo</th>
    <?php }?>
    <th style="width:5%">Acciones</th>
  </tr>
    
   
<?php
$sql="SELECT s.foto, s.correo, u.empresa, u.correo, u.nombre, u.apellidoP, u.apellidoM, u.edad, u.sexo, u.puesto, u.departamento FROM usuarios s INNER JOIN trabajadores u ON u.correo=s.correo WHERE u.empresa='".$_SESSION["razonsocial"]."'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>
  
  <tr>
    <td><center><?php echo "<img id='imagen2' src='".$mostrar['foto']."'>";?></center></td>
    <td><?php echo $mostrar['apellidoP']; ?></td>
    <td><?php echo $mostrar['apellidoM']; ?></td>
    <td><?php echo $mostrar['nombre']; ?></td>
    <td><?php echo $mostrar['edad']; ?></td>
    <td><?php echo $mostrar['sexo']; ?></td>
    <td><?php echo $mostrar['departamento']; ?></td>
    <td><?php echo $mostrar['puesto']; ?></td>
    <?php $arrayq1=$object_usuario->evaluar1E($mostrar['correo']); ?>
        <?php
			if (empty($arrayq1['c'])){
		?>
        <TD style="background-color: rgba(80, 80, 142, 0.67)"><center>No se ha respondido el cuestionario</center></TD>
        <?php
			}else if($arrayq1['r']<2){
		?>
        <TD style="background-color: rgba(0, 255, 0, 0.85)"><center>No requiere atencion</center></TD>
        <?php
			}else{
		?>
        <TD style="background-color: rgba(255, 108, 0, 0.85)"><center>Se requiere atencion</center></TD>
        <?php
            }
		?>
      
      <?php	if ($_SESSION["nivel"]==3){ ?>
      <?php $arrayq3=$object_usuario->evaluar3E($mostrar['correo']); ?>
      <?php $arrayq2=$object_usuario->evaluar2E($mostrar['correo']); ?>
        <?php
			if (empty($arrayq2['c'])){
		?>
        <TD style="background-color: rgba(80, 80, 142, 0.67)"><center>No se ha respondido el cuestionario</center></TD>
        <?php
			}else if($arrayq2['r']<20){
		?>
        <TD style="background-color: rgba(0, 255, 0, 0.85)"><center>No requiere atencion</center></TD>
        <?php
			}else{
		?>
        <TD style="background-color: rgba(255, 108, 0, 0.85)"><center>Se requiere atencion</center></TD>
        <?php
            }
		?>
        <?php
			if (empty($arrayq3['c'])){
		?>
        <TD style="background-color: rgba(80, 80, 142, 0.67)"><center>No se ha respondido el cuestionario</center></TD>
        <?php
			}else if($arrayq3['r']<50){
		?>
        <TD style="background-color: rgba(0, 255, 0, 0.85)"><center>No requiere atencion</center></TD>
        <?php
			}else{
		?>
        <TD style="background-color: rgba(255, 108, 0, 0.85)"><center>Se requiere atencion</center></TD>
        <?php
            }
		?>
        <?php }else if ($_SESSION["nivel"]==2){ ?>
      <?php $arrayq2=$object_usuario->evaluar2E($mostrar['correo']); ?>
        <?php
			if (empty($arrayq2['c'])){
		?>
        <TD style="background-color: rgba(80, 80, 142, 0.67)"><center>No se ha respondido el cuestionario</center></TD>
        <?php
			}else if($arrayq2['r']<20){
		?>
        <TD style="background-color: rgba(0, 255, 0, 0.85)"><center>No requiere atencion</center></TD>
        <?php
			}else{
		?>
        <TD style="background-color: rgba(255, 108, 0, 0.85)"><center>Se requiere atencion</center></TD>
        <?php
            }
		?>
        <?php
            }
		?>
      
    <td id="especel"><center>
        <form id="frm" method="post" action="../vista/vistaTV2.php">
        <input id="correo" name="correo" type="hidden" value="<?php echo $mostrar['correo'];?>">
        <input id="input2" type="submit" value="Ver Perfil">      
        </form><br>
        <form id="frm" method="post" action="../controlador/EmilinaT.php">
        <input id="tte" name="tte" type="hidden" value="<?php echo $mostrar['correo'];?>">
        <input id="input2" type="submit" value="Eliminar">      
        </form></center></td>
  </tr>
    <?php 
    }
    ?>
</table>
<br>
<a href="../vista/inicioE.php"><button type="submit">Regresar</button></a>  
</center>

</section>
<div></div>
<br><br>
<script>
  $('th').click(function() {
    var table = $(this).parents('table').eq(0)
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc) {
      rows = rows.reverse()
    }
    for (var i = 0; i < rows.length; i++) {
      table.append(rows[i])
    }
    setIcon($(this), this.asc);
  })

  function comparer(index) {
    return function(a, b) {
      var valA = getCellValue(a, index),
        valB = getCellValue(b, index)
      return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
    }
  }

  function getCellValue(row, index) {
    return $(row).children('td').eq(index).html()
  }

  function setIcon(element, asc) {
    $("th").each(function(index) {
      $(this).removeClass("sorting");
      $(this).removeClass("asc");
      $(this).removeClass("desc");
    });
    element.addClass("sorting");
    if (asc) element.addClass("asc");
    else element.addClass("desc");
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