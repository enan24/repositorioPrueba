<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario 2</title>
  </head>
  <body>
    <form action="formulario2.php" method="get">
      Ingrese mensaje1: <input type="text" name="mensaje1">
      <br>
      Ingrese mensaje2: <input type="text" name="mensaje2">
      <br>
      <input type="submit" name="enviar" value="Enviar mensaje">
    </form>
    <?php
      echo $_GET["mensaje1"];
     ?>
     <br>
     <?php
      echo $_GET["mensaje2"];
    ?>
  </body>
</html>
