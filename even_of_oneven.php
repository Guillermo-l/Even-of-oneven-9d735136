<?php

echo "Vul een getal in \n";

$getal = readline();

if ($getal % 2 == 1) {
	echo "$getal is een oneven getal";
}
else{
	echo "$getal is een even getal";
}

?>