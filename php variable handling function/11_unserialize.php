<?php

$data = serialize(array("red", "green", "Blue"));
echo $data . "<br>";

$test = unserialize($data);
var_dump($test);

?>