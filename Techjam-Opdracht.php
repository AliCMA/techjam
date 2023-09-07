<?php

//Hier maak ik een for loop, waardoor ik niet alles hoef te echo'en elke nummer maar dat het in een lijst gaat automatisch.
for ($x = 33; $x <= 543; $x++) {
    echo "Nummer: $x <br>";
  }


//Hier was ik bezig met de 2e stap, maar daar liep ik nog vast.
  if ($x & 1) {
    echo "<b>$x</b>";
} elseif ($x & 2) {
    echo "<b>$x</b>";
} elseif ($x % 3 == 0) {
    echo "<b>$x</b>";
}


?>