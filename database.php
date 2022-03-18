<!DOCTYPE html>
   <head>
      <title> Kilder </title>
      <link href="css/style.css" rel="stylesheet" type="text/css">
   </head>

    <?php
    include 'PHP/INSERT.php';
    ?>
  
    </p>
    <form method="POST">
    <input type="number" name="Forfatterid">
    Forfatter ID
    </p>
    <input type="text" name="ForfatterF">
    Forfatter fornavn
    </p>
    <input type="text" name="ForfatterE">
    Forfatter etternavn
    </p>
    <input type="number" name="Bokid">
    Bok ID
    </p>
    <input type="text" name="Tittel">
    Tittel
    </p>
    <input type="submit" name="leggtil" value="Legg til">
    </form>

</html>