<?php
if (5 > 3) {
    echo "Have a good day and a good a idea!";
}
echo "<br>";
echo "####################";
echo "<br>";

if (5 != 5) {
    echo "Have a good day and a good a idea!";
}
echo "<br>";
echo "####################";
echo "<br>";

$t = 14;
if ($t != 20) {
    echo "Have a good day and a good a idea!";
}
echo "<br>";
echo "####################";
echo "<br>";

$y = 14;
if ($y == 20) {
    echo "Have a good day and a good a idea!";
} else {
    echo "Not have a good day and good a ideal.";
}
echo "<br>";
echo "####################";
echo "<br>";

$z = date("H") - 3;
echo ("$z");
echo "<br>";
if ($z < "13") {
    echo "Have a good day!";
} else {
    echo "Have a good afternoon!";
}
echo "<br>";
echo "####################";
echo "<br>";

$n = date ("H");
echo("$n");
echo "<br>";


$n = date("H") - 3;
echo ("$n");
echo "<br>";
if ($n < "8") {
    echo "Have a good morning!";
} elseif ($n < "12") {
    echo "Have a good day!";
} else {
    echo "Hav a good night!";
}
//professor já está fazendo o código na aula7. 
?>