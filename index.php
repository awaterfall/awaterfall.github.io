<!DOCTYPE html>
<html>
  <meta charset="UTF-8"> <!-- æøå -->
  <!-- <meta http-equiv="refresh" content="1"> -->
<head>
<title>Konseptutvikling Anders</title> <!-- Legger til en tittel i fanene, alle nettsidene heter det samme som innholdet som er på dem -->
<link rel="stylesheet" type="text/css" href="CSS/Utseende.css"> <!-- Link til CSS for nettsiden -->
<link rel="shortcut icon" type="image/x-icon" href="Bilder/IkonNettside16px.png"> <!-- Legger til et bilde i fanene -->
</head>
<body>
  <div class="grid_container"> <!-- Grid som fyller hele siden og gjør det mulig å dele den opp i like store deler -->
  
    <!-- Alt du ser på nettsiden er under her -->    
    <div class="dropdown"> <!-- Dropdownmeny på toppen av nettsiden -->
      <div class="meny_border"></div>
      <a class="dropbutton" onclick="menyknapp(this)">Konseptutvikling <!-- Bytter menyknapp mellom aktiv og inaktiv når man trykker øverst på nettsiden -->
          <div class="meny_container"> <!-- Container som alle elementene i menyknappen legger seg relativt i forhold til. Lar meg plassere menyknappen hvor som helst -->
          <div class="bar1"></div> <!-- bar 1, 2 og 3 bygger opp menyknappen oppe i høyre hjørne av nettsiden -->
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </a>

      <div class="dropdown_innhold"> <!-- Innholdet i dropdownmenyen, alle er linker til de sidene de skal gå til -->
        <a href="#">Konseptutvikling</a>
        <a href="PHP/medieproduksjon.php">Medieproduksjon</a>
        <a href="PHP/teknologiforstaaelse.php">Teknologiforståelse</a>
        <a href="PHP/matematikk.php">Matematikk</a>
        <a href="PHP/naturfag.php">Naturfag</a>
        <a href="PHP/engelsk.php">Engelsk</a>
      </div>
    </div>

  <div class="innhold"> <!-- HOVEDINNHOLD -->
    <div class="in">  <!-- Gjør at tekst ligger naturlig -->

      <iframe src="https://www.youtube.com/embed/Uh61r5MQlTY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <!-- Video på nettsiden -->
      <iframe src="https://www.youtube.com/embed/EvHZJ4ONmug" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <!-- Video på nettsiden -->
        <a href="https://www.w3schools.com/" class="button" target="_blank">W3schools</a> <!-- Knapp til W3schools -->
        <br>
        <a href="../php/databasetest.php" class="button" target="_blank">Database</a> <!-- Knapp til database -->

    </div>
  </div>             <!-- HOVEDINNHOLD SLUTT -->

<!--Javascript til nettsiden-->
<script src="Javascript/Script.js"></script>
  <!-- Alt innholdet du kan se på nettsiden er over her -->
  </div>
</body>
</html>