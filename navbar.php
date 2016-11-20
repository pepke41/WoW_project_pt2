<?php
class navBar {
    function __toString() {
      return '<nav>
          <ul class="nav">
            <li class="nav-item"><a href="index.php">World of Warcraft</a></li>
            <li class="nav-item trigger"><a href="#">Expansions</a>
              <ul class= "dropdown-menu">
                <li class="nav-item"><a href="burning_crusade.php">Burning Crusade</a></li>
                <li class="nav-item"><a href="lich_king.php">Wrath of the Lich King</a></li>
                <li class="nav-item"><a href="cataclysm.php">Cataclysm</a></li>
                <li class="nav-item"><a href="mists_of_pandaria.php">Mists of Pandaria</a></li>
                <li class="nav-item"><a href="warlords_of_draenor.php">Warlords of Draenor</a></li>
                <li class="nav-item"><a href="legion.php">Legion</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="vote.php">Pick Your Favorite</a></li>
            <li class="nav-item"><a href="guest_book.php">Guest Book</a></li>
          </ul>
        </nav>';
    }
}


