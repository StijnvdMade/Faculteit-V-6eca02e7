<?php
echo "Kies een nummer: ";
$nummer = readline();
$i = 1;
$antwoord = 1;
while ($i != $nummer) {
    $antwoord = $antwoord *($i+1);
    $i++;
    }
echo "Faculteit is " . $antwoord;
?>