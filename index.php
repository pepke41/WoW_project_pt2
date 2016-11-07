<?php
  include 'navbar.php';
  $navBar = new navbar();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Expansion Mansion</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
  </head>

  <body>
  <?php echo $navBar; ?>

    <h1>World of Warcraft</h1>
    <p>World of Warcraft is MMORPG that was created in 2004.
    This page will give a brief introduction to the game, and what was
    available to a player in 2004. Each of the of the other tabs will
    focus on the following expansions. Also there is
    a page to vote and rank the WoW expansions. Enjoy!<p>

    <div class="maps">
      <h2>Azeroth</h2>
      <img src="img/original_map.jpg" alt="original azeroth map">
      <p><sup>While it will go through many changes through the expansions the Azeroth
        of the first game was restricted to the Eastern Kingdom and Kalimdor</sup></p>
    </div>

    <h2>Who and what could you play as in Vanilla?</h2>
    <p>The level cap in the original game was 60. Players could play as one
    of eight races, and choose one of nine classes. Not all classes are
    available to all races. Also in this expansion Horde only can play as a
    Shaman (all but Undead can be Shamans), and Alliance only can be
    paladins (Dwarves and Humans only).</p>

    <h3>Races</h3>
    <div id="originalRaces">
      <div id="hordeRaces">
        <img src="img/horde.png" alt="Horde icon" class="icon">
        <ul>
          <li>Orc</li>
          <li>Tauren</li>
          <li>Troll</li>
          <li>Undead</li>
        </ul>
      </div>

      <div id="allianceRaces">
        <img src="img/alliance.png" alt="Alliance icon" class="icon">
        <ul>
          <li>Human</li>
          <li>Night Elf</li>
          <li>Dwarf</li>
          <li>Gnome</li>
        </ul>
      </div>
    </div>

    <div id="orginalClasses">
      <h3>Classes</h3>
      <ul>
        <li>Paladin*</li>
        <li>Druid</li>
        <li>Warrior</li>
        <li>Hunter</li>
        <li>Rogue</li>
        <li>Priest</li>
        <li>Warlock</li>
        <li>Shaman**</li>
        <li>Mage</li>
      </ul>
    </div>
    <p class="classOnly"><sup>*Alliance only</sup></p>
    <p class="classOnly"><sup>**Horde only</sup></p>
    </br>

    <div id="originalLore">
      <h2>Lore</h2>
      <h3>In the beginning...</h3>
      <p>The orc home world was falling apart so following a strange warlock the
      orc clans migrated to Azeroth. However, as they decided to make this their
      new home they encountered a new spieces the humans. Their struggle began
      the Horde and Alliance.</p>
      <h3>A Joining of Forces</h3>
      <h4>The Horde Unites</h4>
      <p>Lady Sylvanas Windrunner, The Banshee Queen, rulled over the undead.
        She decided to join forces with Thrall the current leader of the Orcs.
        After settling in Kalimdor the Orcs also encountered the Trolls led by
        Vol'jin and the Tauren, led by Cairne Bloodhoof. Together these four
        races united to create the original horde.</p>
      <h4>A Strong Alliance</h4>
      <p>Stormwind has previously been destroyed in battle, but now the humans
      were rebuilding their society and all the humans came under the rule of
      King Varian Wrynn. Knowing they needed help the humans reached out to
      their long time allies the Dwarves who joined the Alliance. With the
      Dwarves came the Gnomes. After their home Gnomergan had been toxified,
      they came to live in refuge of the drawven people. The Night Elves who
      had their home on Kalimdor seeing the horde as a threat decided to also
      ally themselves with the Alliance, they previously had an alliance with
      Lady Jaina Proudmoore who had now sworn to help King Varian Wrynn.</p>
    </div>
    <h3>More Dangers Come to Azeroth</h3>
    <p>Azeroth faced many perils. The Horde began to argue amoung themsevles,
    and the orcs suffered demon contamination. The forsaken (the undead under
    Lady Sylvanas) began to try and wipe out all living humans. The Trolls as
    well struggled amoung themselves fighting against those who called themselve
    "true Trolls". The Alliance also had their power struggles amoung the
    Dwarves there were three clans that struggled for control, and King Varian
    Wrynn had gone missing leaving Anduin, his young son, in charge.</p>
    <h3>What's next?</h3>
    <p>At the conclusion of the first World of Warcraft game Azeroth becomes
    exposed to the dark portal. The portal brought Lord Kazzak and the legion
    to take over Azeroth. Although the citizens of Azeroth would not take this
    lying down. The Horde and Alliance both worked to drive the legion from
    their home, leaving the dark portal open. With the dark portal open those
    brave enough could choose to explore a new realm the Outlands</p>

    <h2>Raids</h2>
    <ul>
      <li><u>Ruins of Ahn'Qiraj</u>: During the final hours of the War of the Shifting
        Sands, the combined forces of the night elves and the four dragonflights
        drove the battle to the very heart of the qiraji empire, to the fortress
        city of Ahn'Qiraj. Yet at the city gates, the armies of Kalimdor
        encountered a concentration of silithid war drones more massive than any
        they had encountered before. Ultimately the silithid and their qiraji
        masters were not defeated, but merely imprisoned inside a magical
        barrier, and the war left the cursed city in ruins.</li>
      <li><u>The Molten Core</u>: The Molten Core lies at the very bottom of Blackrock
        Depths. It is the heart of Blackrock Mountain and the exact spot where,
        long ago in a desperate bid to turn the tide of the dwarven civil war,
        Sorcerer-thane Thaurissan summoned the elemental Firelord, Ragnaros,
        into the world. Though the Firelord is incapable of straying far from
        the blazing core, it is believed that his elemental minions command the
        Dark Iron dwarves, who are in the midst of creating armies out of living
        stone.</li>
      <li><u>Blackwing Lair:</u> Blackwing Lair can be found at the very height of
        Blackrock Spire, a towering pinnacle of ancient stone hewn to a dragon's
        specifications. In the dark recesses of the mountain's peak, Nefarian,
        the eldest son of Deathwing, conducts some of his most awful
        experimentation, controlling mighty beings like puppets and combining
        the eggs of different dragonflights with horrific results. Should he
        prove successful, even darker pursuits rest on the horizon.</li>
      <li><u>Onyxia's Lair:</u> It is said that Onyxia delights in corrupting the
        mortal races by meddling in their political affairs. To this end it is
        believed that she takes on various humanoid forms and uses her charm and
        power to influence delicate matters between the different races. Some
        believe that Onyxia has even assumed an alias once used by her father -
        the title of the royal House Prestor. When not meddling in mortal
        concerns, Onyxia resides in a fiery cave below the Dragonmurk, a dismal
        swamp located within Dustwallow Marsh. There she is guarded by her kin,
        the remaining members of the insidious black dragonflight.</li>
      <li><u>Temple of Ahn'Qiraj:</u> At the heart of Ahn'Qiraj lies an ancient temple
        complex. Built in the time before recorded history, it is both a
        monument to unspeakable gods and a massive breeding ground for the
        qiraji army. Since the War of the Shifting Sands ended a thousand years
        ago, the Twin Emperors of the qiraji empire have been trapped inside
        their temple, barely contained behind the magical barrier erected by the
        bronze dragon Anachronos and the night elves.</li>
    </ul>

    <h2>The Music</h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/zLbkTn9wnoQ" frameborder="0" allowfullscreen></iframe>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>

