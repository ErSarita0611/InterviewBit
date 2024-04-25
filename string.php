<?php

// Slicing
// You can return a range of characters by using the substr() function.

// Specify the start index and the number of characters you want to return.

// Start the slice at index 6 and end the slice 5 positions later:


$x = "Hello World";
echo substr($x, 6, 5);

echo "<br>";

// Slice From the End
// Use negative indexes to start the slice from the end of the string:

$y = "Hello World";
echo substr($y, -5, 3);
echo "<br>";

// Negative Length
// Use negative length to specify how many characters to omit, starting from the end of the string:

    $z = "Hey How are you?";
    echo substr($z, 5, -3);

?>