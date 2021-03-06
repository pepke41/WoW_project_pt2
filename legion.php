<?php
include 'navbar.php';
  $navBar = new navbar();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Legion</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
  </head>

  <body>
    <?php echo $navBar; ?>
    <div class="full-page">
      <h1>Legion</h1>
      <p>Gul'dan and the Burning Legion are back to conquer Azeroth. Players will
      quest in the Broken Isles and 6 new zones to stop them. Players can advance
      to level 110, play as a new class, get an awesome artifact weapon, and
      explore their class halls.</p>

      <div class="maps">
        <h2>The Burning Isles</h2>
        <img src="img/broken_map.jpg" alt="Map of the Broken Isles">
      </div>

      <h2>New Classes</h2>
      <p>There is one new class in the legion expansion, the Demon Hunter. Demon
      Hunters are followers of Illidan who drank demon blood to become strong like
      the demons and defeat them. Illidan and his Illidari were imprisoned by many
      years, but with the Legion destroying Azeroth his captors the Night Elves
      decided that they needed Illidan's help. Demon Hunters start at level 98 and
      can be either Night Elves or Blood Elves. Demon Hunters can be either
      Vengeance (Tanks) or Havoc (DPS).

      <h2>Lore</h2>
      <h3>The Legion is Coming</h3>
      <p>At the end of Warlords of Draenor the Alliance and Horde attempted to
      work together to defeat Gul'dan, but unfortunately not successful. Now
      Gul'dan is bringing his whole Legion army against Azeroth. When the player
      first starts questing in Legion they join the joint Horde/Alliance battle to
      defeat Gul'dan. During the battle against Gul'dan Vol'jin the current
      Warchief of the Horde is fatally injured so Sylvanas Windrunner chooses to
      retreat. Without the help of the Horde the Alliance realizes they will
      surely be defeated as well and retreat, but not without Varian Wrynn
      falling from the Alliance ship to fight off Gul'dan's minion to help the
      rest of the Alliance army can escape.</p>
      <h3>Big Changes in Azeroth</h3>
      <p>Within the first 20 minutes of the expansion both leaders of the Horde
      and Alliance have died. Vol'jin was fatally wounded and died in Orgrimar,
      but not before naming a new Warchief, Lady Sylvanas Windrunner, the Banshee
      Queen of Undercity. While the replacement Warchief was more up in the air,
      the new leader of the Alliance obviously fell to King Varian's Wrynn's son,
      Anduin. Many of Anduin's advisors tell him they should go to war with the
      Horde after they effectively caused the death of his father, but Anduin
      alwasy level headed decides that for now the two factions must work together
      to defeat the Legion. Neutral to Horde and Alliance the Kirin Tor of Dalaran
      also implement a huge change. Rarely does the Kirin Tor intervene, but with
      the threat of the Legion looming, King Anduin asks his friend and Kirin Tor
      leader Jaina Proudmore to do something. Dalaran the Kirin Tor floating city,
      moves to Broken Isles to help the people of Azeroth in anyway they can.</p>

      <h2>Raids</h2>
      <ul>
        <li><u>the Emerald Nightmare</u>: This area once stood as the cradle of elven
          civilization, centered around the ancient elven capital of Suramar,
          until the Sundering tore the land apart. While the power of the
          Nightwell preserved the city of Suramar, the surrounding lands bear the
          scars of that catastrophic event. But now Gul'dan has awakened the Tomb
          of Sargeras, and from the tauren camps in the peaks of Highmountain, to
          the druidic groves of Val'sharah, to vrykul settlements that dot
          Stormheim, the Isles live in the shadow of the Legion.</li>
        <li><u>The Nighthold</u>: The largest structure in the Broken Isles, and among
          the grandest in all of Azeroth, the Nighthold stands as a testament to
          the achievements of the nightborne civilization. Centered around the
          Nightwell, the fount of arcane power that has sustained Suramar for
          centuries, these grounds were built as a haven from the worries of the
          world. But as a felstorm churns above the former temple of Elune across
          the bay, and Gul'dan himself now resides within the palace's walls,
          those worries now begin, not end, here.</li>
      </ul>

      <h2>Music</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/SZKPa3zpwWk" frameborder="0" allowfullscreen></iframe>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
