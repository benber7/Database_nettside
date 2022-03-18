<!DOCTYPE html>
   <head>
      <title> Kilder </title>
      <link href="css/style.css" rel="stylesheet" type="text/css">
   </head>


   <body>
      <header>
         Legg inn kilder i databasen
      </header>
      <?php


      include 'PHP/database.php';
      include 'PHP/SELECT_Overskrift1.php';

         // Tilkoblingsinformasjon	
         $tjener = "localhost";
         $port = 8889;
         $brukernavn = "root";
         $passord = "root";
         $database = "pln";
         
         // Opprette en kobling
         $kobling = new MySQLi($tjener, $brukernavn, $passord, $database, $port);

         // Sjekk om koblingen virker
         if ($kobling->connect_error) {
         die("Noe gikk galt: " . $kobling->connect_error);
      }
      
         // Angi UTF-8 som tegnsett
         $kobling->set_charset("utf8");

      ?>
      </div>
   </body>

</html>