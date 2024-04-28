<?php

function get_cars($obj){
    if(!is_object($obj)){
        return false;
    }
    return $obj->cars;
}
$obj = new stdClass();
$obj->cars = array("volvo", "BMW", "Audi");
 var_dump(get_cars(null));
 echo "<br>";
 var_dump(get_cars($obj));

?>