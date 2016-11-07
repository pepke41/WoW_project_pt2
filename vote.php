<?php
include 'navbar.php';
  $navBar = new navbar();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Best Expansion</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
  </head>

  <body>
    <?php echo $navBar; ?>
    <div id="form">
      <h1>Pick Your Favorite</h1>
      <form action ="" id="vote">
        <input type="radio" name="expansion"
        value="Vanilla World of Warcraft">Original</input><br>
        <input type="radio" name="expansion" value="The Burning Crusade">Burning
        Crusade</input><br>
        <input type="radio" name="expansion" value="Wrath of the Lich King">Wrath of the Litch King</input><br>
        <input type="radio" name="expansion" value="Cataclysm">Cataclysm</input><br>
        <input type="radio" name="expansion" value="Mists of Pandaria">Pandaria</input></br>
        <input type="radio" name="expansion" value="Warlords of Draenor">Warlords of Draenor</input><br>
        <input type="radio" name="expansion" value="Legion">Legion</input></br>
        <input type="submit" value="Vote!"</input>
      </form>
    </div>

    <div id="recorded">
      <h2 id="expPicked"></h2>
    </div>

    <div class="hidden" id="notRecorded">
      <h2>Oops! Something went wrong</h2>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
