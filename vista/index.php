<?php 
/* Se verificará que la sesión este iniciada, en tal caso, se rediriguirá a la vista principal de usuario*/
  session_start();
  if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]=='0'){
  header("Location: ../vista/inicioE.php");
  }else if (isset($_SESSION["usrFirmado"]) && $_SESSION["usrFirmado"]=='1'){
  header("Location: ../vista/inicioT.php");
  }else{
?>
<?php
/* Se incluye el encabezado, que contiene los estilos*/
include("Header.html");
?>
<br><?php /*En esta seccion esta el formulario para iniciar sesión*/ ?>
  <center><div class= "contenedor" style="float:left;font-family:Helvetica"><br>
     <center>Inciar sesion</center><br><br>
        <form id="frm" method="post" action="..\controlador\login.php">
         
          E-mail <input type="text" id="sit" name="user" placeholder="ejemplo: usuario@ecn.com" autocomplete="on" required="true"/><br><br>
          
          Password  <input type="password" id="sit" name="password" placeholder="*****************" autocomplete="on" required="true"/><br><br><br>
          
          <input id="input1" type="submit" value="Iniciar Sesión">      
        </form><br><br>
      <?php /*En esta seccion se va a los distitos formularios de registro*/ ?>
      <div class="registro" style="font-family:Helvetica">
        ¿No se ha registrado?<br>
        Puede hacerlo ahora mismo
        <br>
        <a href="../vista/registroE.php"><button type="submit">Empresa</button></a>
        <a href="../vista/registroT.php"><button type="submit">Trabajador</button></a>
    </div>
    </div></center>
<?php /*En esta seccion hay informacion del portal*/ ?>
    <center><div style="font-family:Helvetica;float:right;width: 60%;text-align: justify;margin-right:10px">
        <h2>¿Qué es la nom-035-stps-2018?</h2>
        Es la Norma Oficial Mexicana NOM-035-STPS-2018, Factores de riesgo psicosocial en el trabajo-Identificación, análisis y prevención.<br>
        Más informacion haciendo click en el banner.
        </div>
        <?php 
      /*Se incluye en la pagina el siguiente banner*/
      include_once("Baner.html");?>
        <div style="font-family:Helvetica;float:right;width: 60%;text-align: justify;margin-right:10px">
        <h2>¿Cual es el proposito del portal?</h2>
        Ayudar a las PYMES con el cumplimiento de tal norma, mediante la identificacion de aquellas areas de la norma que cumplen y aquellas en las que requieren hacer cambios. todo esto medinte la aplicacion de los cuestionarios de prueba que estasn presentes en la norma y que fueron prublicados en el diario oficial de la federacion: <a href="https://dof.gob.mx/nota_detalle.php?codigo=5541828&fecha=23/10/2018." target=”_blank”>https://dof.gob.mx/nota_detaslle.php?codigo=5541828&fecha=23/10/2018.</a>
        </div>
</center>.
<div>
    <br><br><br><br><br><br><br><br><br><br></div>
<?php /*se incluye el pie*/
include_once("Pie.html");
?>
<?php
    }
?>