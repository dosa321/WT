<?php

echo "Even numbers between 1 and 50: ";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "\nOdd numbers between 1 and 50: ";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>
