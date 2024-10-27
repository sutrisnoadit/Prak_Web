<?php
  for ($i = 6; $i >= 1; $i--) {
    echo "\n"; 
    for ($j = 6; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
}