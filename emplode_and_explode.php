<?php

$x = "Hello World";
$y = explode(" ", $x);
print_r($y);

echo "<br>";

$arr = array('Hello', 'World!', 'Beautiful', 'day!');
echo implode(" ", $arr)."<br>";
echo implode("+", $arr)."<br>";
echo implode("-", $arr)."<br>";
echo implode("X", $arr)."<br>";


?>