<?php
$string = "Rami Ramadan";
echo $string;
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";

echo " the length of string is  " . strlen($string);
echo "<br>";
echo $string[3];
echo "<br>-----------<br>" ;

echo $string;
$string[7] = "b";
echo "<br>";
echo $string;
echo "<br>-----------<br>" ;

echo $string;
echo "<br>";
echo str_replace("Rami", "Salme" , $string);
echo "<br>-----------<br>" ;

echo $string;
echo "<br>";
echo substr($string, 4,5);





/*
strtolower
strtoupper
strlen
str_replace
substr




*/
?>

