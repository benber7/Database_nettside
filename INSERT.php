<!DOCTYPE html>
   <head>
      <title> Kilder </title>
      <link href="css/style.css" rel="stylesheet" type="text/css">
   </head>

    <?php

    // Tilkoblingsinformasjon
    $tjener = "localhost";
    $port = 8889;
    $brukernavn = "root";
    $passord = "root";
    $database = "pln";

    // Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);
    // Sjekk om koblingen virker
    if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
    }

    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");
    // Lagrer skjemafeltene i enklere navn

    $BID = $_POST["Bokid"];
    $TT = $_POST["Tittel"];
    $FID = $_POST["Forfatterid"];
   
    $sql = "INSERT INTO bok (Bokid, Tittel, Forfatterid) 
    VALUES ('$BID', '$TT', '$FID')";

    if($kobling->query($sql)) {
    echo "Spørringen ble gjennomført i bok, ";
    } 

    $FF = $_POST["ForfatterF"];
    $FE = $_POST["ForfatterE"];
    $FID = $_POST["Forfatterid"];

    $sql = "INSERT INTO forfatter (ForfatterF, ForfatterE, Forfatterid) 
    VALUES ('$FF', '$FE', '$FID')";

    if($kobling->query($sql)) {
    echo "forfatter";
    } 

    $BID = $_POST["Bokid"];
    $FID = $_POST["Forfatterid"];

    $sql = "INSERT INTO forfatter_has_bok(Forfatter_Forfatterid, Bok_Bokid) VALUES ('$FID', '$BID')";

    if($kobling->query($sql)) {
    echo " og forfatter_has_bok";
    } 

    ?>
</html>