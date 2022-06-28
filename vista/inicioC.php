<?php
/*En este archivo se iniciará sesión por primera vez despues de registrar un usuario nuevo*/
include("Header.html");
?>
<br>
<script>
alert("Registro Completo, Por Favor inicie Sesion");
</script>
  <center><div class= "contenedor" style="font-family:Helvetica"><br>
     <center>Inciar sesion</center><br><br>
        <form id="frm" method="post" action="..\controlador\login.php">
         
          E-mail <input type="text" id="sit" name="user" placeholder="ejemplo: usuario@ecn.com" autocomplete="on" required="true"/><br><br>
          
          Password  <input type="password" id="sit" name="password" placeholder="*****************" autocomplete="on" required="true"/><br><br><br>
          
          <input id="input1" type="submit" value="Iniciar Sesión">      
        </form>   
    </div>
    <br><a href="../vista/index.php"><button type="submit">Más Tarde</button></a>
    </center>
    <br><br>
