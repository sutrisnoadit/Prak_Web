<?php 
for ($i=0; $i < 6 ; $i++) { 
    echo "\n";
    for ($j=0 ; $j < 6 - $i ; $j++) { 
        echo " ";
    }
    for ($j=0; $j < (2 * $i - 1) ; $j++) { 
        echo "*";
    }
   
}