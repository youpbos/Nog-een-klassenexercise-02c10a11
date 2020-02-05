<?php
echo"Wie zitter er in de klas?".PHP_EOL;

$namen = explode(" ", readline(""));
echo"De studenten in de klas zijn:" .PHP_EOL;
foreach($namen as $naam){
    echo($naam) . PHP_EOL;
}
?>