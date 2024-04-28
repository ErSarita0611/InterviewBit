<?php

$a = "Hello";
echo "a is " . is_countable($a) . "<br>";

$b = array("red", "green", "blue");
echo "b is " . is_countable($b) . "<br>";

$c = array("sarita"=>"26", "rahul"=>"23", "rohit"=>"24");
echo "c is " . is_countable($c) . "<br>";

$d = [1, 2, 3];
echo "d is " . is_countable($d) . "<br>";
?>