<?php
$i = 0;
while ($i <= 5) {
    echo ("$i <br>");
    $i++;
}

echo "<br>";
echo "######################";
echo "<br>";

$i = 0;
while ($i < 5) {
    if ($i == 3) break;
    echo ("$i <br>");
    $i++;
}

echo "<br>";
echo "######################";
echo "<br>";

$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo ("$i <br>");
}

echo "<br>";
echo "######################";
echo "<br>";

$i = 1;
while ($i <6):
    echo("$i <br>");
    $i++;
endwhile;

echo "<br>";
echo "######################";
echo "<br>";

$i=1;
do{
    echo ("$i <br>");
    $i++;
} while ($i < 6);

echo "<br>";
echo "######################";
echo "<br>";

$i=1;
do {
    if ($i==3) break;
    echo ("$i <br>");
    $i++;
} while ($i<6);

echo "<br>";
echo "######################";
echo "<br>";

$i=0;
do {
    $i++;
    if ($i==3) continue;
    echo ("$i <br>");
} while ($i<6);

?>