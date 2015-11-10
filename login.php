<?php
session_start();
?>
<html>
 <body>
  <img style="float: right" src="http://img3.wikia.nocookie.net/__cb20140713203906/cuidadoyamoranimal/es/images/9/94/Pollito.jpg" width="192px">
 <h1 style="margin-right:10px">Banco del Pollo</h1>

<?php
if (isset($_SESSION["user"])) {
    echo "<p>Bienvenido, " . $_SESSION["user"] . "!<br>";
    echo '<a href="process.php?action=logout">Cerrar sesión</a></p>';
}
else {
?>
  <form action="process.php?action=login" method="post">
   <p>El usuario es: pollo</p>
   <input type="text" name="user" size="20">
   <p>La contraseña es: test</p>
   <input type="password" name="pass" size="20">
   <input type="submit" value="Iniciar sesión">
  </form>
<?php
}
?>
 </body>
</html>
