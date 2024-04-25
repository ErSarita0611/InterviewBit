<?php
function test(){
    for ($x = 0; $x <= 10; $x++) {
        continue;
        break;
        
        return $x;
	 throw new Exception("Something went wrong");
    }
    return 100;
}
try {
    test(100);
    echo "it is rigth";
}
catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}
print(test());

?>
<!-- 100 -->
<!-- 0 -->
<!-- 100 -->