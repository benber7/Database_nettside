<!DOCTYPE html>
   <head>
      <title> Kilder </title>
      <link href="css/style.css" rel="stylesheet" type="text/css">
   </head>

    <h1>
        Database tabel
    </h1>

    <?php
    // Tilkoblingsinformasjon
    $tjener = "localhost";
    $port = 8889;
    $brukernavn = "root";
    $passord = "root";
    $database = "pln";
    // Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);
    // Sjekker om koblingen virker
    // if ($kobling->connect_error) {
    // die("Noe gikk galt: " . $kobling->connect_error);
    // }
    // else {
    // echo "Koblingen virker"; }

    //Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

    $sql = "SELECT K.Forfatterid, K.ForfatterF, K.ForfatterE, B.Tittel, B.Bokid

    FROM pln.forfatter K, pln.bok B, pln.forfatter_has_bok P

    WHERE K.Forfatterid=P.Forfatter_Forfatterid

    AND B.Bokid=P.Bok_Bokid";




    $resultat = $kobling->query($sql);
    echo "<Table>"; // Starter tabellen
        echo "<tr>"; // Lager en rad med overskrifter
        echo "<th>Tittel</th>";
        echo "<th>Forfatter Fornavn</th>";
        echo "<th>Forfatter Etternavn</th>";
        echo "<th>Forfatter ID</th>";
        echo "<th>Bok ID</th>";


        echo "</tr>";
        while($rad = $resultat->fetch_assoc()) {
        $FID = $rad["Forfatterid"];
        $FF = $rad["ForfatterF"];
        $FE = $rad["ForfatterE"];
        $BID = $rad["Bokid"];
        $TT = $rad["Tittel"];

        echo "<tr>";
        echo "<td>$TT</td>";
        echo "<td>$FF</td>";
        echo "<td>$FE</td>";
        echo "<td>$BID</td>";
        echo "<td>$FID</td>";

        echo "</tr>";
    }
    echo "</table>"; // Avslutter tabellen
    ?>
</html>