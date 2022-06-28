<?php
/* Este archivo sirve para desplegar una lista de documentos que ayudan en la acreditacion de la norma y un manual de las funciones del portal */
session_start();
include_once("Header.html");
include_once("..\modelo\usuario.php");
if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]==0){
include_once("menuE.html");
$object_usuario=new usuario();
$conexion=mysqli_connect("localhost","root","","nom-035");
?>
<section style="height:60%; width: 99%;margin-left:0.5%">
        <br>
         <center><b style="font-family:Helvetica;">Documentos Importantes</b></center>
         <br>
<center><table id="tablaT">
    <tr>
    <th style="width:8%">Titulo</th>
    <th style="width:0.5%">Año</th>
    <th style="width:14%">Descripción</th>
    <th style="width:5%">hiperv&iacute;nculo</th>
  </tr>
    
   
<?php
$sql="SELECT * FROM manuales";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>
  
  <tr>
    <td id="especel3"><?php echo $mostrar['titulo']; ?></td>
    <td style="word-break: break-all"><?php echo $mostrar['año']; ?></td>
    <td style="word-break: break-all"><?php echo $mostrar['descripcion']; ?></td>
    <td style="word-break: break-all"><a href="<?php echo $mostrar['hipervinculo']; ?>" target="_blank">Ir al Documento</a></td>
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