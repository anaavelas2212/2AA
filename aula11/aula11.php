<?php
$car = array("brand"=>"Ford", "model"=> "Mustang", "year"=>1964);//se colocar aspas no número 1964 ele se torna uma string.
var_dump($car);

echo "<br>";
echo "-----------------------------------";
echo "<br>";

$car = array("brand"=>"Ford", "model"=> "Mustang", "year"=>1964);
echo $car["model"];

echo "<br>";
echo "-----------------------------------";
echo "<br>";

$car = array("brand"=>"Ford", "model"=> "Mustang", "year"=>1964);
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}

?>