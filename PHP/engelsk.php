<!-- Alle forklaringer fra <html> til </div> i dropdown_innhold ligger i "index.php"-->

<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="refresh" content="1">  -->
<head>
<title>Engelsk Anders</title> <!-- Tekst og bilde i fanene -->
<link rel="stylesheet" type="text/css" href="../CSS/Utseende.css">
<link rel="shortcut icon" type="image/x-icon" href="../Bilder/IkonNettside16px.png">
</head>
<body>
  <div class="grid_container"> <!-- Grid som fyller hele siden og gjør det mulig å dele den opp i like store deler -->

  <!-- Alt du ser på nettsiden er under her -->
    
    <div class="dropdown">
        <div class="meny_border"></div>
        <a class="dropbutton" onclick="menyknapp(this)">Engelsk
            <div class="meny_container">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        </a>
      <div class="dropdown_innhold">
        <a href="../index.php">Konseptutvikling</a>
        <a href="medieproduksjon.php">Medieproduksjon</a>
        <a href="teknologiforstaaelse.php">Teknologiforståelse</a>
        <a href="matematikk.php">Matematikk</a>
        <a href="naturfag.php">Naturfag</a>
        <a href="#">Engelsk</a>
      </div>
    </div>  <!-- Alle forklaringer frem til hit er i "index.php" -->

  <div class="innhold"> <!-- HOVEDINNHOLD -->
    <div class="in">  <!-- Gjør at tekst ligger naturlig -->

      

    </div>
  </div>             <!-- HOVEDINNHOLD SLUTT -->

<!--Javascript til nettsiden-->
<script src="../Javascript/Script.js"></script>
  <!-- Alt du ser på nettsiden er over her -->
  </div>
</body>
</html>