<?php
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
    echo"$x <br>";
}

echo "<br>";
echo "-----------------------------------";
echo "<br>";

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
    if ($x == "blue") break;
    echo"$x <br>";
}

echo "<br>";
echo "-----------------------------------";
echo "<br>";

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
    if ($x == "blue") continue;
    echo"$x <br>";
}
?>