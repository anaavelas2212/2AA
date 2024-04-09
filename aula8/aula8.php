<?php
for ($x = 0; $x <=10; $x++){
    echo "The number is: $x<br>";
}

echo "<br>";
echo "-----------------------------------";
echo "<br>";

for ($x = 0; $x <= 10; $x++) {
    if ($x == 7) break;
    echo "The number is: $x <br>";
}

echo "<br>";
echo "-----------------------------------";
echo "<br>";

for ($x = 0; $x <= 10; $x++) {
    if ($x == 5) continue;
    echo "The number is: $x <br>";
}

echo "<br>";
echo "-----------------------------------";
echo "<br>";

for ($x = 0; $x <= 100; $x += 20) {
    echo "The number is: $x <br>";
}
?>