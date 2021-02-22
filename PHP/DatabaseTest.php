<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database</title>
    <title>Konseptutvikling Anders</title> <!-- Legger til en tittel i fanene, alle nettsidene heter det samme som innholdet som er på dem -->
    <link rel="stylesheet" type="text/css" href="../CSS/Utseende.css"> <!-- Link til CSS for nettsiden -->
    <link rel="shortcut icon" type="image/x-icon" href="../Bilder/IkonNettside16px.png"> <!-- Legger til et bilde i fanene -->
</head>
<body>


    <div class="innhold">
<div class="hovedvindu">

<h1>Legge inn kilder i databasen</h1>
<?php


 include 'PHP/database.php';
 ?>
 </div>

 <div class="hovedvinduDB">

<h2>Mine databasekilder</h2>
<?php
 include 'SELECT_Oversikt1.php';
 ?>
 </div>

 <?php
 include 'INSERT_Forfatter.php';
 include 'INSERT_Artikke.php';
 include 'INSERT_F_AV_A.php';
 ?>

</p>
<form method="POST">
 <input type="number" name="ForfatterID">
 Forfatter ID
 </p>
 <input type="text" name="Fornavn">
 Forfatter fornavn
 </p>
 <input type="text" name="Etternavn">
 Forfatter etternavn
 </p>
 <input type="number" name="ArtikkelID">
 Artikkel ID
 </p>
 <input type="text" name="Kilde">
 Kilde
 </p>
 <input type="text" name="Beskrivelse">
 Beskrivelse
 </p>
 <input type="submit" name="leggtil" value="Legg til">
</form>

<?php
if(isset($_POST["leggtil"]))
{

 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "mydb";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn

 $FID = $_POST["ForfatterID"];
 $FF = $_POST["Fornavn"];
 $FE = $_POST["Etternavn"];


 $sql = "INSERT INTO Forfatter (ForfatterID, Fornavn, Etternavn)
 VALUES ('$FID', '$FF', '$FE')";
 
 if($kobling->query($sql)) {
 echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }


}
?>

<?php
if(isset($_POST["leggtil"]))
{

 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "mydb";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn
 $AID = $_POST["ArtikkelID"];
 $Kilde = $_POST["Kilde"];
 $ABeskrivelse = $_POST["Beskrivelse"];
 $sql = "INSERT INTO Artikler (ArtikkelID, Kilde, Beskrivelse) VALUES ('$AID',
'$Kilde', '$ABeskrivelse')";

 if($kobling->query($sql)) {
 echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }


}
?>

<?php
if(isset($_POST["leggtil"]))
{

 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "mydb";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn
 $AID = $_POST["ArtikkelID"];
 $FID = $_POST["ForfatterID"];


 $sql = "INSERT INTO Forfatter_has_Artikler(Forfatter_ForfatterID, Artikler_ArtikkelID) VALUES
('$FID', '$AID')";
 if($kobling->query($sql)) {
 echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }


}
?>

<?php
 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "mydb";
 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 // if ($kobling->connect_error) {
 // die("Noe gikk galt: " . $kobling->connect_error);
// }
// else {
 // echo "Koblingen virker"; }

 //Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
$sql = "SELECT K.ForfatterID, K.Fornavn, K.Etternavn, B.Kilde, B.ArtikkelID,
B.Beskrivelse, P.Dato
FROM mydb.Forfatter K, mydb.Artikler B, mydb.Forfatter_has_Artikler P
WHERE K.ForfatterID=P.Forfatter_ForfatterID
AND B.ArtikkelID=P.Artikler_ArtikkelID
ORDER BY B.Beskrivelse, B.ArtikkelID, K.Etternavn, P.Dato";
$resultat = $kobling->query($sql);
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
 echo "<th>Beskrivelse</th>";
 echo "<th>Kilde</th>";
 echo "<th>Fornavn</th>";
 echo "<th>Etternavn</th>";
 echo "<th>Dato</th>";
 echo "<th>Forfatter ID</th>";
 echo "<th>Artikkel ID</th>";


echo "</tr>";
while($rad = $resultat->fetch_assoc()) {
 $Dato= $rad["Dato"];
 $FID = $rad["ForfatterID"];
 $FF = $rad["Fornavn"];
 $FE = $rad["Etternavn"];
 $AID = $rad["ArtikkelID"];
 $Kilde = $rad["Kilde"];
 $ABeskrivelse = $rad["Beskrivelse"];

 echo "<tr>";
 echo "<td>$ABeskrivelse</td>";
 echo "<td>$Kilde</td>";
 echo "<td>$FF</td>";
 echo "<td>$FE</td>";
 echo "<td>$Dato</td>";
 echo "<td>$AID</td>";
 echo "<td>$FID</td>";

 echo "</tr>";
}
echo "</table>"; // Avslutter tabellen
?>

</div>
</body>
</html>
