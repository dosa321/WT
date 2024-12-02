<?php

function factorial($num) {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i; 
    }
    return $result;
}


$number = 5; 


echo "The factorial of $number is: " . factorial($number);
?>

